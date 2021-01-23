<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class LegislatureController extends Controller
{
    /**
     * Show legislatures view
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('legislature');
    }

    /**
     * Download law file
     * 
     * @param   string $file
     * @return  \Illuminate\Http\Response
     */
    public function download($file)
    {
        return Storage::disk('local')->download("laws/$file");
    }
}
