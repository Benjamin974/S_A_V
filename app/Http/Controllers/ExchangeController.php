<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\ExchangesModel;
use App\ExchangesTypesModel;
use App\Http\Resources\ExchangesRessources;
use App\Http\Resources\UsersRessources;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExchangeController extends Controller
{
    
    public function index() {
        $clients = ClientsModel::All();
        $clientsCollection = UsersRessources::collection($clients);

        $exchangesTypes = ExchangesTypesModel::All();
        $exchangesTypesCollection = UsersRessources::collection($exchangesTypes);

        $users = User::All();
        $usersCollection = UsersRessources::collection($users);

        $exchanges = ExchangesModel::All();
        $exchangesCollection = ExchangesRessources::collection($exchanges);
        
        // return $exchangesCollection;
        return view("clients.exchange", ['exchangesTypes' => $exchangesTypesCollection, 'clients' => $clientsCollection, 'users' => $usersCollection]);
    }

    public function add(Request $request) {
        $validator = Validator::make($request->all(), [
            'date_echange' => 'required',
            'commentaire' => 'required',
            'id_exchanges_types' => 'required',
            'id_clients' => 'required',
            'id_users' => 'required'
        ])->validate();

        $donneesBdd = ExchangesModel::create(
            $validator
        )->save();
       return "Ajouter dans bdd";
    }
}
