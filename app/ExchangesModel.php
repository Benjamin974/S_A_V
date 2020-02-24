<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges';
    protected $fillable = ['commentaire', 'id_clients', 'id_users', 'id_exchanges_types'];
    public $timestamps = false;

    function client()
    {
        return $this->belongsTo(ClientsModel::class, 'id_clients');
    }

    function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    function exchangesTypes()
    {
        return $this->belongsTo(ExchangesTypesModel::class, 'id_exchanges_types');
    }
}
