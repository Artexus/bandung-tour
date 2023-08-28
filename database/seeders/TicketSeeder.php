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
        $x = array();
        for ($i = 1; $i <= 40; $i++) {
            if (random_int(1, 10) <= 2) { // 20%
                array_push($x, [
                    "site_id" => $i,
                    "name" => "anak/dewasa",
                    "price" => random_int(5, 50) * 1000
                ]);
            } else {
                array_push($x, [
                    "site_id" => $i,
                    "name" => "anak-anak",
                    "price" => random_int(2, 10) * 1000
                ], [
                    "site_id" => $i,
                    "name" => "dewasa",
                    "price" => random_int(8, 30) * 1000
                ]);
            }
        }

        DB::table('tickets')->insert($x);
    }
}
