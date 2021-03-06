<?php

namespace App\Http\Controllers;

use App\Http\Requests\SmsCodeRequest;
use App\Http\Services\SmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $data = $this->smsService->send($request->phone_number);

        if($data['code'] === 401) {
            return redirect()->back()->withErrors([
                $data['message']
            ]);
        } else if($data['code'] === 422) {
            return redirect()->route('registerCompany');
        }

        return redirect()->route('verify');
    }

    /**
     * Verify sms code
     * 
     * @param \Illuminate\Http\Request $request
     */
    public function verify(Request $request)
    {
        $data = $this->smsService->verify($request->verification_code);

        if(!$data['success']) {
            return redirect()->back()->withErrors([
                $data['message']
            ]);
        }

        return redirect()->route('home');
    }
}
