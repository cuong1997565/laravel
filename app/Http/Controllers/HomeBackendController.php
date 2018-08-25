<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBackendController extends Controller
{
    public function getHome(){
        return view('backend.index');
    }
}
