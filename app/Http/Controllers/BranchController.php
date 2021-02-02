<?php

namespace App\Http\Controllers;

use App\Http\Requests\BranchRequest;
use App\Http\Services\BranchService;
use App\Http\Services\GeneralListService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    protected $branchService;
    protected $listService;

    /**
     * Create a new instance of BranchController
     * 
     * @param \App\Http\Services\BranchService $branchService
     */
    public function __construct(BranchService $branchService, GeneralListService $listService)
    {
        $this->branchService = $branchService;
        $this->listService = $listService;
    }

    /**
     * Show a listing of all branches
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        $dataLists = $this->listService->all();
        $branches = $this->branchService->all();

        return view('branches.index', [
            'lists' => $dataLists,
            'branches' => $branches
        ]);
    }

    /**
     * Store a newly create branch
     * 
     * @param \App\Http\Requests\BranchRequest $request
     */
    public function store(BranchRequest $request)
    {        
        $data = $this->branchService->store($request);

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }
    
    /**
     * Update a newly create branch
     * 
     * @param \App\Http\Requests\BranchRequest $request
     * @param int $id
     */
    public function update(BranchRequest $request, $id)
    {        
        $data = $this->branchService->update($request, $id);

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }

    /**
     * Activate branch
     * 
     * @param int $id
     */
    public function activate(Request $request, $id)
    {
        $data = $this->branchService->activate($id);

        $request->session()->flash('success', $data['message']);

        return redirect()->back();
    }
    
    /**
     * Deactivate branch
     * 
     * @param int $id
     */
    public function deactivate(Request $request, $id)
    {
        $data = $this->branchService->deactivate($id);

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
        $data = $this->branchService->getById($id);

        return response()->json($data);
    }
}
