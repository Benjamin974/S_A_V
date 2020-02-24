<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
                "name" => "Julie",
                "email" => "julie@hoo.fr"
            ],
            [
                "id" => 2,
                "name" => "Alisson",
                "email" => "alisson@hoo.fr"
            ],
            [
                "id" => 3,
                "name" => "Christianne",
                "email" => "christianne@hoo.fr"
            ]
        ];

        DB::table('users')->insert(
            $array
        );
    }
}
