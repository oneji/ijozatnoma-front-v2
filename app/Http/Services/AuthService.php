<?php

namespace App\Http\Services;

use App\Http\JsonRequests\RegisterCitizenRequest;
use App\Http\JsonRequests\RegisterCompanyRequest;

class AuthService
{
    protected $httpClient;

    /**
     * SmsService constructor
     */
    public function __construct(HttpClientService $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Store a newly created company
     * 
     * @param   \App\Http\JsonRequests\RegisterCompanyRequest $request
     * @return  object $responseBody
     */
    public function registerCompany(RegisterCompanyRequest $request)
    {
        $data = $this->httpClient->request('POST', 'register/company', $request->all());

        return $data;
    }
    
    /**
     * Store a newly created citizen
     * 
     * @param   \App\Http\JsonRequests\RegisterCompanyRequest $request
     * @return  object $responseBody
     */
    public function registerCitizen(RegisterCitizenRequest $request)
    {
        $data = $this->httpClient->request('POST', 'register/citizen', $request->all());
        
        return $data;
    }
}