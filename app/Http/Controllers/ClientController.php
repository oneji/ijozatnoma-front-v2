<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Services\ClientService;
use App\Http\Services\GeneralListService;
use Illuminate\Http\Request;

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
        $data = $this->clientService->all();

        return view('clients.index', [
            'clients' => $data
        ]);
    }

    /**
     * Store a newly create client
     * 
     * @param \App\Http\Requests\ClientRequest $request
     */
    public function store(ClientRequest $request)
    {
        $data = $this->clientService->store($request);
        
        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }

    /**
     * Update a newly create client
     * 
     * @param \App\Http\Requests\ClientRequest $request
     * @param int $id
     */
    public function update(ClientRequest $request, $id)
    {        
        $data = $this->clientService->update($request, $id);

        return $data;

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }

    /**
     * Activate client
     * 
     * @param int $id
     */
    public function activate(Request $request, $id)
    {
        $data = $this->clientService->activate($id);

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }
    
    /**
     * Deactivate client
     * 
     * @param int $id
     */
    public function deactivate(Request $request, $id)
    {
        $data = $this->clientService->deactivate($id);

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }

    /**
     * Get by id
     * 
     * @param int $id
     */
    public function getById($id)
    {
        $data = $this->clientService->getById($id);

        return response()->json($data);
    }
}
