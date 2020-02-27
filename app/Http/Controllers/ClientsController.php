<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
       //recupere tous les circuit
       $clients = ClientsModel::all();
       //Retourne la data cad les circuits
       return view('clients.clients', ['clients' => $clients]);
    }

    public function moreInfo($id) 
    {
        $clients = ClientsModel::find(1)
        ->where('id', '=', $id)
        ->first();

        return view('partials.information')->with('client', $clients);
    }

    
}
