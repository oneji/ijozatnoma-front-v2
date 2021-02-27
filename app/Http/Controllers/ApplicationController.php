<?php

namespace App\Http\Controllers;

use App\Http\Services\ApplicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $this->applicationService->store($request);

        $request->session()->flash('success', __('form.applicationSuccess'));

        return redirect()->back();
    }

    /**
     * Remove request
     * 
     * @param int $id
     */
    public function remove($id)
    {
        $this->applicationService->remove($id);

        return redirect()->back();
    }

    /**
     * Pay for application
     * 
     * @param string $type
     * @param int $paymentRequestId
     */
    public function pay($type, $paymentRequestId)
    {
        $data = $this->applicationService->pay($type, $paymentRequestId);

        return response()->json($data);
    }
}
