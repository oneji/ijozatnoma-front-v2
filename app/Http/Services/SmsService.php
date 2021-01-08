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
        $randomCode = mt_rand(100000, 999999);
        # sms logic
        $smsCode = new SmsCode();
        $smsCode->phone_number = $phoneNumber;
        $smsCode->code = $randomCode; // Test code
        $smsCode->sent_at = $now;
        $smsCode->expires_at = Carbon::parse($now)->addMinutes(3);
        $smsCode->save();

        return $smsCode;
    }
}