<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegislatureController extends Controller
{
    /**
     * Show contacts view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        return view('legislature');
    }
}
