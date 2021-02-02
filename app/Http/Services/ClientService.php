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
     * Get all clients
     */
    public function all()
    {
        $user = Session::get('user');
        $targetId = $user['target_id'];

        if($user['type'] === 'company') {
            $link = "clients/companies/getList/$targetId";
        } else {
            $link = "clients/citizens/getList/$targetId";
        }

        $data = $this->httpClient->request('GET', $link);

        return $data['clients'];
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

    /**
     * Update a newly create client
     * 
     * @param   \App\Http\Requests\ClientRequest $request
     * @param   $id
     * @return  array $data
     */
    public function update(ClientRequest $request, $id)
    {
        $data = $this->httpClient->request('POST', "clients/update/$id", $request->all());
        
        return $data;
    }

    /**
     * Activate client
     * 
     * @param   int $id
     * @return  array $data
     */
    public function activate($id)
    {
        $data = $this->httpClient->request('GET', "clients/activate/$id");
        
        return $data;
    }
    
    /**
     * Deactivate client
     * 
     * @param   int $id
     * @return  array $data
     */
    public function deactivate($id)
    {
        $data = $this->httpClient->request('GET', "clients/deactivate/$id");
        
        return $data;
    }

    /**
     * Get by id
     * 
     * @param   int $id
     * @return  array $data
     */
    public function getById($id)
    {
        $data = $this->httpClient->request('GET', "clients/getClient/$id");
        
        return $data;
    }
}