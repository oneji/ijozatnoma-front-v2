<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Services\ClientService;
use App\Http\Services\GeneralListService;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    protected $clientService;
    protected $listService;

    /**
     * Create a new instance of ClientController
     * 
     * @param \App\Http\Services\ClientService $clientService
     */
    public function __construct(ClientService $clientService, GeneralListService $listService)
    {
        $this->clientService = $clientService;
        $this->listService = $listService;
    }

    /**
     * Show a listing of all clients
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        $dataLists = $this->listService->all();

        return view('clients.index', $dataLists);
    }

    /**
     * Store a newly create client
     * 
     * @param \App\Http\Requests\ClientRequest $request
     */
    public function store(ClientRequest $request)
    {
        return $request->all();
        
        $data = $this->clientService->store($request);

        return $data;
    }
}
