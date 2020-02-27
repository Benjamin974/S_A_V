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
                "commentaire" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis aperiam architecto magnam maxime quae odit labore reiciendis aspernatur inventore veniam",
                "date_echange" => "2020-02-12",
                "id_clients" => 1,
                "id_users" => 1,
                "id_exchanges_types" => 1,
            ],
            [
                "id" => 2,
                "commentaire" => "Animi sit dolorem pariatur placeat exercitationem adipisci quo, quasi nulla!",
                "date_echange" => "2020-02-12",
                "id_clients" => 2,
                "id_users" => 2,
                "id_exchanges_types" => 2,
            ],
            [
                "id" => 3,
                "commentaire" => "Esse earum itaque atque, tenetur, dolores libero enim sunt eligendi harum. Repudiandae, rem voluptatibus. Qui soluta voluptates cum asperiores quisquam.",
                "date_echange" => "2020-02-12",
                "id_clients" => 3,
                "id_users" => 3,
                "id_exchanges_types" => 1,
            ],
            [
                "id" => 4,
                "commentaire" => " Voluptates molestiae eaque nemo dolorem vitae saepe quos qui dolor labore ab asperiores, nulla quis, ex corporis magnam animi odit eligendi id?",
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
