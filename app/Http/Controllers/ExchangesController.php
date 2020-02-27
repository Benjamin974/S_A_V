<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use Illuminate\Http\Request;
use App\ExchangesModel;
use App\Http\Resources\ExchangesRessources;
use App\User;
use Illuminate\Http\Resources\Json\Resource;

class ExchangesController extends Controller
{

    public function index() {

        $clients = ClientsModel::all();
        $exchanges = ExchangesModel::all();
        $exchangesCollection = ExchangesRessources::collection($exchanges);
        return view('clients.exchanges', ['exchanges' => $exchangesCollection, 'clients' => $clients]);
    }

    public function show($id) {
        $clients = ClientsModel::find($id);
        $exchanges = ExchangesModel::where('id_clients', '=', $id)->get();
        $data =  ExchangesRessources::collection($exchanges);
        return view('clients.exchanges', ['exchanges' => $data, 'clients' => $clients]);
    }

}
