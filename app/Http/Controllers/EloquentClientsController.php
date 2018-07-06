<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class EloquentClientsController extends Controller
{

    public function index(){
        $clients = Client::all();
        return view('eloquent.index', [
            'clients' => $clients
        ]);
    }

    public function create(){
        return view('admin.client.client');
    }

    public function store(Request $request){
        return $request->get('value');
    }
}
