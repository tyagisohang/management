<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelfContractorController extends Controller
{
    public function dashboard()
    {
        return view('selfcontrator.dashboard');
    }
}
