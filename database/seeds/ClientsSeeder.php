<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
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
                "nom" => "Aldo",
                "prenom" => "Jean",
                "telephone" => "0692121212",
                "mail" => "jeanaldo@hoo.fr"
            ],
            [
                "id" => 2,
                "nom" => "Gilardino",
                "prenom" => "Alvares",
                "telephone" => "0692121212",
                "mail" => "algil@hoo.fr"
            ],
            [
                "id" => 3,
                "nom" => "Silver",
                "prenom" => "Anthonio",
                "telephone" => "0692121212",
                "mail" => "silanth@hoo.fr"
            ]
        ];

        DB::table('clients')->insert(
            $array
        );
    }
}
