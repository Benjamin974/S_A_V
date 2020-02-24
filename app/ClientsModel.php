<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients';
    protected $fillable = ['nom', 'prenom', 'telephone', 'mail'];
    public $timestamps = false;

    function client(){
        return $this->hasMany(ExchangesModel::class,'id_clients');
    }
}
