<?php

namespace App\Http\Services;

use App\Http\JsonRequests\RegisterCitizenRequest;
use App\Http\JsonRequests\RegisterCompanyRequest;

class AuthService
{
    /**
     * Store a newly created company
     * 
     * @param   \App\Http\JsonRequests\RegisterCompanyRequest $request
     * @return  object $responseBody
     */
    public function registerCompany(RegisterCompanyRequest $request)
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request('POST', 'register/company', [
            'headers' => [
                'Accept'     => 'application/json'
            ],
            'http_errors' => false,
            'form_params' => $request->all()
        ]);
        $responseBody = json_decode($response->getBody()->getContents());

        return $responseBody;
    }
    
    /**
     * Store a newly created citizen
     * 
     * @param   \App\Http\JsonRequests\RegisterCompanyRequest $request
     * @return  object $responseBody
     */
    public function registerCitizen(RegisterCitizenRequest $request)
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => config('app.adminURL')
        ]);
        
        $response = $client->request('POST', 'register/citizen', [
            'headers' => [
                'Accept'     => 'application/json'
            ],
            'http_errors' => false,
            'form_params' => $request->all()
        ]);
        $responseBody = json_decode($response->getBody()->getContents());

        return $responseBody;
    }
}