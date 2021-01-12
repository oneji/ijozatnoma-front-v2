<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class ApplicationService
{
    protected $httpClient;

    /**
     * ApplicationService constructor
     * 
     * @param \App\Http\Services\HttpClientService $httpClient
     */
    public function __construct(HttpClientService $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Get company application list data
     * 
     * @return array $data
     */
    public function companyListData()
    {
        $user = session('user');
        $data = [];

        if($user['type'] === 'company') {
            $data = $this->httpClient->request('GET', "requests/companies/getListInfo/". $user['phone_number']);
        } else {
            $data = $this->httpClient->request('GET', 'requests/citizens/getListInfo');
        }

        return $data;
    }

    /**
     * Store a newly created application
     * 
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $user = session('user');
        $data = [];

        if($user['type'] === 'company') {
            $formData = [
                'branch_id' => $request->branch_id,
                'activity_id' => $request->activity_id
            ];
            $data = $this->httpClient->request('POST', 'requests/companies/', $formData);
        } else {
            $formData = [
                'activity_id' => $request->activity_id
            ];

            $data = $this->httpClient->request('POST', 'requests/citizens/'.$user['phone_number'], $formData);
        }

        return $data;
    }
}