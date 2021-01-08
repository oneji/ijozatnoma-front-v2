<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Show applications view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applications.index');
    }

    /**
     * Show form to create an application
     * 
     * @param \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created application
     */
    public function store(Request $request)
    {
        return $request->all();
    }
}
