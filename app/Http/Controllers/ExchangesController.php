<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\ExchangesModel;
use App\ExchangesTypesModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExchangesController extends Controller
{
    public function index() {
        $clients = ClientsModel::All();
        $exchangesTypes = ExchangesTypesModel::All();
        $users = User::All();
        
        return view("clients.exchanges", ['exchangesTypes' => $exchangesTypes, 'clients' => $clients, 'users' => $users]);
    }

    public function add(Request $request) {
        $validator = Validator::make($request->all(), [
            'commentaire' => 'required',
            'id_exchanges_types' => 'required',
            'id_clients' => 'required',
            'id_users' => 'required'
        ])->validate();

        $donneesBdd = ExchangesModel::create(
            $validator
        )->save();
       return json_encode($donneesBdd);
    }

}
