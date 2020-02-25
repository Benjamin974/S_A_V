<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExchangesRessources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $clients = new ClientsRessources($this->clients);
        $users = new UsersRessources($this->users);
        $exchangesTypes = new ExchangesTypesRessources($this->exchangesTypes);

        return[
            'id'=>$this->id,
            'commentaire'=>$this->commentaire,
            'Date'=>$this->date_echange,
            'clients'=>$clients,
            'users'=>$users,
            'exchanges_types'=>$exchangesTypes,

        ];
    }
}
