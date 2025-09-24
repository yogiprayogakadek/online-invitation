<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // return view('errors.index');
        return view('_index');
    }
}
