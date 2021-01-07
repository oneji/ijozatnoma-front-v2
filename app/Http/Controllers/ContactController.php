<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show contacts view
     * 
     * @param \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts');
    }
}
