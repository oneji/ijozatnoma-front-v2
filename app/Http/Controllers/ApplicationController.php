<?php

namespace App\Http\Controllers;

use App\Http\Services\ApplicationService;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    protected $applicationService;

    /**
     * ApplicationController constructor
     * 
     * @param \App\Http\Services\ApplicationService $applicationService
     */
    public function __construct(ApplicationService $applicationService)
    {
        $this->applicationService = $applicationService;
    }

    /**
     * Show applications view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->applicationService->all();

        return view('applications.index', $data);
    }

    /**
     * Show form to create an application
     * 
     * @param \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->applicationService->companyListData();

        return view('applications.create', $data);
    }

    /**
     * Store a newly created application
     */
    public function store(Request $request)
    {
        $data = $this->applicationService->store($request);

        return response()->json($data);
    }
}
