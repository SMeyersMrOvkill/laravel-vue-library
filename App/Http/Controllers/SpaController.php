<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    /**
     * Single-Page App index route - Returns the single-page view.
     */
    public function index() 
    {
        return view('spa');
    }
}
