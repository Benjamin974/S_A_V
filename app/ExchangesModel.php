<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges';
    protected $fillable = ['commentaire', 'date_echange', 'id_clients', 'id_users', 'id_exchanges_types'];
    public $timestamps = false;

    function clients()
    {
        return $this->belongsTo(ClientsModel::class, 'id_clients');
    }

    function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    function exchangesTypes()
    {
        return $this->belongsTo(ExchangesTypesModel::class, 'id_exchanges_types');
    }
}
