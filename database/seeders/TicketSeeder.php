<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert(
            [
                [
                    "site_id" => 1,
                    "name" => "anak-anak",
                    "price" => 8000,
                ],
                [
                    "site_id" => 1,
                    "name" => "dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 2,
                    "name" => "anak-anak",
                    "price" => 5000,
                ],
                [
                    "site_id" => 2,
                    "name" => "dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 3,
                    "name" => "anak-anak",
                    "price" => 3000,
                ],
                [
                    "site_id" => 3,
                    "name" => "dewasa",
                    "price" => 10000,
                ],

                [
                    "site_id" => 3,
                    "name" => "anak/dewasa",
                    "price" => 10000,
                ],

                [
                    "site_id" => 4,
                    "name" => "anak/dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 5,
                    "name" => "anak/dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 6,
                    "name" => "anak/dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 7,
                    "name" => "anak/dewasa",
                    "price" => 10000,
                ],
                [
                    "site_id" => 8,
                    "name" => "anak",
                    "price" => 20000,
                ],
                [
                    "site_id" => 8,
                    "name" => "dewasa",
                    "price" => 25000,
                ]
            ]
        );
    }
}
