<?php

namespace App\Http\Controllers;

use App\Http\Requests\SmsCodeRequest;
use App\Http\Services\SmsService;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    protected $smsService;
    
    /**
     * SmsController constructor
     * 
     * @param \App\Http\Services\SmsService $smsService;
     */
    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    /**
     * Store a newly created sms code and send it to the client
     * 
     * @param \App\Http\Requests\SmsCodeRequest $request
     */
    public function send(SmsCodeRequest $request)
    {
        $this->smsService->send($request->phone_number);

        return $request->all();
    }
}
