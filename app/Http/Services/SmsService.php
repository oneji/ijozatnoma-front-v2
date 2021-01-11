<?php

namespace App\Http\Services;

use App\SmsCode;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;
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
            $smsCode = new SmsCode();
            $smsCode->phone_number = $phoneNumber;
            $smsCode->code = $randomCode;
            $smsCode->sent_at = $now;
            $smsCode->expires_at = $threeMinsLater;
            $smsCode->save();
            
            # sms logic
            // $login = config('app.sms.login');
            // $from = config('app.sms.sender');
            // $smsApi =   config('app.sms.server');
            // $pass_salt_hash = config('app.sms.hash');
            // $msg = $smsCode->code;
            // $txn_id = uniqid();
            // $dlmr = ';';
            // $str_hash = hash('sha256', $txn_id.$dlmr.$login.$dlmr.$from.$dlmr.$phoneNumber.$dlmr.$pass_salt_hash);

            // // Create a client with a base URI
            // $client = new \GuzzleHttp\Client();
            // // API params
            // $params = [
            //     'query' => [
            //         'from' => $from,
            //         'phone_number' => $phoneNumber,
            //         'msg' => $msg,
            //         'login' => $login,
            //         'str_hash' => $str_hash,
            //         'txn_id' => $txn_id
            //     ]
            // ];
            
            // $response = $client->get($smsApi, $params);
        }

        // Check if user with such a phone number exists
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request('GET', "checkClient/$phoneNumber", [ 'http_errors' => false ]);
        $responseBody = json_decode($response->getBody()->getContents());

        Session::put('phone', $phoneNumber);

        if($response->getStatusCode() !== 200) {
            return [
                'success' => false,
                'code' => $responseBody->code,
                'message' => $responseBody->message
            ];
        }

        return [
            'success' => true
        ];
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

        // Login user via user object
        // Check if user with such a phone number exists
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request('GET', "checkClient/$phoneNumber", [ 'http_errors' => false ]);
        $responseBody = json_decode($response->getBody()->getContents());

        if($response->getStatusCode() !== 200) {
            return [
                'success' => false,
                'code' => $responseBody->code,
                'message' => $responseBody->message
            ];   
        }

        Session::put('user', [
            'id' => $responseBody->client->id,
            'name' => $responseBody->client->name,
            'phone_number' => $responseBody->client->phone_number
        ]);

        return [
            'success' => true
        ];
    }
}