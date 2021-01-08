<?php

namespace App\Http\Services;

use App\SmsCode;
use Carbon\Carbon;

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
    }
}