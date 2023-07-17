<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert(
            [
                [
                    "location_name" => "Gedung Sate, Citarum, Indonesia",
                    "description" => "Gedung Sate adalah gedung yang memiliki kesan sejarah sangat kuat bagi
                masyarakat Bandung & Indonesia. Gedung ini menjadi simbol kejayaan arsitektur Hindia-Belanda.",
                    "path" => "images/popular-1.jpg",
                    "total_votes" => 10000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Tangkuban Perahu, Lembang, Indonesia",
                    "description" => "Tangkuban Perahu adalah gunung berapi aktif. Keindahan alamnya yang indah
                contohnya seperti danau & kawah di puncak gunung.",
                    "path" => "images/popular-2.jpg",
                    "total_votes" => 9500,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Kawah Putih, Ciwidey, Indonesia",
                    "description" => "Kawah Putih dahulu tempat pabrik belerang masa kolonial Belanda yang bernama
                Zwavel Ontgining. Kawah putih adalah danau yang terbentuk akibat letusan Gunung Patuha.",
                    "path" => "images/popular-3.jpg",
                    "total_votes" => 9000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Farm House, Lembang, Indonesia",
                    "description" => "Farm House adalah tempat wisata dengan konsep pedesaan Eropa dengan berbagai
                fasilitas menarik seperti Kebun Binatang Mini, Kolam Ikan & Taman Bunga.",
                    "path" => "images/popular-5.jpg",
                    "total_votes" => 8000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Floating Market, Lembang, Indonesia",
                    "description" => "Floating Market adalah tempat kuliner makanan & minuman tradisional terapung di
                dalam kapal serta melihat suasana alam yang indah.",
                    "path" => "images/popular-6.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 3,
                ],
                [
                    "location_name" => "Orchid Forest, Cikole, Indonesia",
                    "description" => "Orchid Forest adalah Taman yang memiliki koleksi orchid & menyediakan berbagai
                fasilitas rekreasi.",
                    "path" => "images/popular-7.jpg",
                    "total_votes" => 4000,
                    "average_rating" => 3.5,
                ],
                [
                    "location_name" => "Taman Wisata Bougenville, Cimaung, Indonesia",
                    "description" => "Lembang Park & Zoo adalah tempat wisata kebun binatang & wahana permainan area
                keluarga.",
                    "path" => "images/popular-4.jpg",
                    "total_votes" => 7000,
                    "average_rating" => 3,
                ],
                [
                    "location_name" => "Lembang Park & Zoo, Lembang, Indonesia",
                    "description" => "Taman Wisata Bougenville adalah pengunjung bisa melihat tempat bunga
                bougenville
                bermekaran, Terdapat tempat kuliner makanan & tempat wisata permainan anak-anak.",
                    "path" => "images/popular-9.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 3,
                ]
            ]
        );
    }
}
