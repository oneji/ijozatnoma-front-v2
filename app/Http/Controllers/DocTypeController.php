<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocTypeController extends Controller
{
    /**
     * Show contacts view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doc-types');
    }
}
