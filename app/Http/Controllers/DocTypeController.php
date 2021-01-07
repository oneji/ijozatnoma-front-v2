<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocTypeController extends Controller
{
    /**
     * Show doc types view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doc-types');
    }
}
