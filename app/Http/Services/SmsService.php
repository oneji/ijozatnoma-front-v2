<?php

namespace App\Http\Services;

use App\SmsCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class SmsService
{
    /**
     * Send verification code by sms
     * 
     * @param string $phoneNumber
     */
    public function send($phoneNumber)
    {
        $now = Carbon::now();
        $threeMinsLater = Carbon::parse($now)->addMinutes(3);

        $oldCodes = SmsCode::wherePhoneNumber($phoneNumber)
            ->whereActive(1)
            ->where('expires_at', '>', $now)
            ->get();
        
        $smsCode = null;
        if($oldCodes->count() === 0) {
            $randomCode = mt_rand(100000, 999999);
            # sms logic
            $smsCode = new SmsCode();
            $smsCode->phone_number = $phoneNumber;
            $smsCode->code = $randomCode;
            $smsCode->sent_at = $now;
            $smsCode->expires_at = $threeMinsLater;
            $smsCode->save();
        }

        Session::put('phone', $phoneNumber);
    }

    /**
     * Verify sms code
     * 
     * @param int $smsCode
     */
    public function verify($smsCode)
    {
        $phoneNumber = Session::get('phone');

        $smsCode = SmsCode::wherePhoneNumber($phoneNumber)
            ->where('code', $smsCode)
            ->where('active', 1)
            ->first();

        // Sms code is correct
        if(!$smsCode) {
            return [
                'success' => false,
                'message' => 'Введен неверный код подтверждения.'
            ];
        }

        // TODO: Make API call to admin to get user credentials
        $smsCode->active = 0;
        $smsCode->save();

        Session::remove('phone');
        
        return [
            'success' => true
        ];
    }
}