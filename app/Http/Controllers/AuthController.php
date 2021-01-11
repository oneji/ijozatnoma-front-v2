<?php

namespace App\Http\Controllers;

use App\Http\Services\GeneralListService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $listService;

    /**
     * AuthController constructor
     * 
     * @param \App\Http\Services\GeneralListService $listService
     */
    public function __construct(GeneralListService $listService)
    {
        $this->listService = $listService;
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
     * Show register form
     * 
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        $dataLists = $this->listService->all();

        // return $dataLists;

        return view('auth.register', [
            'lists' => $dataLists
        ]);
    }
}
