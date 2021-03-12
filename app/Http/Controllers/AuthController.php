<?php

namespace App\Http\Controllers;

use App\Http\JsonRequests\RegisterCitizenRequest;
use App\Http\JsonRequests\RegisterCompanyRequest;
use App\Http\Services\AuthService;
use App\Http\Services\GeneralListService;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $listService;
    protected $authService;

    /**
     * AuthController constructor
     * 
     * @param \App\Http\Services\GeneralListService $listService
     * @param \App\Http\Services\GeneralListService $authService
     */
    public function __construct(GeneralListService $listService, AuthService $authService)
    {
        $this->listService = $listService;
        $this->authService = $authService;
    }

    /**
     * Show login form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Show verification form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showVerifyForm()
    {
        if(!Session::has('phone')) {
            return redirect()->route('login');
        }

        return view('auth.verify');
    }

    /**
     * Show register company form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showRegisterCompanyForm()
    {
        $dataLists = $this->listService->all();

        return view('auth.register_company', [
            'lists' => $dataLists
        ]);
    }

    /**
     * Register a new company
     * 
     * @param \App\Http\JsonRequests\RegisterCompanyRequest $request
     */
    public function registerCompany(RegisterCompanyRequest $request)
    {
        $this->authService->registerCompany($request);
        
        return redirect()->route('loginForm');
    }
    
    /**
     * Show register citizen form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showRegisterCitizenForm()
    {
        $dataLists = $this->listService->all();

        return view('auth.register_citizen', [
            'lists' => $dataLists
        ]);
    }

    /**
     * Register a new citizen
     * 
     * @param \App\Http\JsonRequests\RegisterCitizenRequest $request
     */
    public function registerCitizen(RegisterCitizenRequest $request)
    {        
        $data = $this->authService->registerCitizen($request);
        
        return redirect()->route('loginForm');
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Session::forget('user');
        Session::forget('phone');

        return redirect()->route('home');
    }
}
