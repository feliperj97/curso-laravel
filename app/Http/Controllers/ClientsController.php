<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function store(){
        return view('client');
    }
}
