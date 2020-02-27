<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "id" => 1,
                "commentaire" => "commentestUn",
                "date_echange" => "2020-02-12",
                "id_clients" => 1,
                "id_users" => 1,
                "id_exchanges_types" => 1,
            ],
            [
                "id" => 2,
                "commentaire" => "commentestDeux",
                "date_echange" => "2020-02-12",
                "id_clients" => 2,
                "id_users" => 2,
                "id_exchanges_types" => 2,
            ],
            [
                "id" => 3,
                "commentaire" => "commentestTrois",
                "date_echange" => "2020-02-12",
                "id_clients" => 3,
                "id_users" => 3,
                "id_exchanges_types" => 1,
            ],
            [
                "id" => 4,
                "commentaire" => "commentestTrois",
                "date_echange" => "2020-02-12",
                "id_clients" => 1,
                "id_users" => 3,
                "id_exchanges_types" => 1,
            ]
        ];

        DB::table('exchanges')->insert(
            $array
        );
    }
}
