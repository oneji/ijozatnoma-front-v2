<?php

namespace App\Http\Services;

use App\Http\Requests\BranchRequest;
use Illuminate\Support\Facades\Session;

class BranchService
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
     * Get all branches
     * 
     * @return collection $branches
     */
    public function all()
    {
        $targetId = Session::get('user')['target_id'];
        $data = $this->httpClient->request('GET', "branches/getList/$targetId");
        
        return $data['branches'];
    }

    /**
     * Store a newly create client
     * 
     * @param   \App\Http\Requests\BranchRequest $request
     * @return  array $data
     */
    public function store(BranchRequest $request)
    {
        $targetId = Session::get('user')['target_id'];
        $data = $this->httpClient->request('POST', "branches/store/$targetId", $request->all());
        
        return $data;
    }
   
    /**
     * Update a newly create client
     * 
     * @param   \App\Http\Requests\BranchRequest $request
     * @param   $id
     * @return  array $data
     */
    public function update(BranchRequest $request, $id)
    {
        $data = $this->httpClient->request('POST', "branches/update/$id", $request->all());
        
        return $data;
    }

    /**
     * Activate branch
     * 
     * @param   int $id
     * @return  array $data
     */
    public function activate($id)
    {
        $data = $this->httpClient->request('GET', "branches/activate/$id");
        
        return $data;
    }
    
    /**
     * Deactivate branch
     * 
     * @param   int $id
     * @return  array $data
     */
    public function deactivate($id)
    {
        $data = $this->httpClient->request('GET', "branches/deactivate/$id");
        
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
        $data = $this->httpClient->request('GET', "branches/getBranch/$id");
        
        return $data;
    }
}