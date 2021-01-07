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
        return view('applications');
    }
}
