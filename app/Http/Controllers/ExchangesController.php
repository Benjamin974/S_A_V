<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExchangesModel;
use App\Http\Resources\ExchangesRessources;

class ExchangesController extends Controller
{

    public function index() {

        $exchanges = ExchangesModel::all();
        $exchangesCollection = ExchangesRessources::collection($exchanges);
        return view('clients.exchanges', ['exchanges' => $exchangesCollection]);
    }

}
