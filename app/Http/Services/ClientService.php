<?php

namespace App\Http\Services;

use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Session;

class ClientService
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
     * Store a newly create client
     * 
     * @param \App\Http\Requests\ClientRequest $request
     */
    public function store(ClientRequest $request)
    {
        $targetId = Session::get('user')['target_id'];
        $data = $this->httpClient->request('POST', "clients/companies/store/$targetId", $request->all());
        
        return $data;
    }
}