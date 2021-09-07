<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Lalaing",
                "firstname" => "Charles",
                "age" => 42,
                "email" => "charles@mail.be",
                "password" => "AZSSDEdcc"
            ],
            [
                "name" => "azerty",
                "firstname" => "Maurice",
                "age" => 12,
                "email" => "maurice@mail.be",
                "password" => "aqwzsxedc"
            ],
            [
                "name" => "cube",
                "firstname" => "Lynx",
                "age" => 32,
                "email" => "lynx@mail.be",
                "password" => "pl,okij"
            ],
        ]);
    }
}
