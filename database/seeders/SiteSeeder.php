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
                    "description" => "Taman Wisata Bougenville adalah pengunjung bisa melihat tempat bunga
                bougenville
                bermekaran, Terdapat tempat kuliner makanan & tempat wisata permainan anak-anak.",
                    "path" => "images/popular-4.jpg",
                    "total_votes" => 7000,
                    "average_rating" => 3,
                ],
                [
                    "location_name" => "Lembang Park & Zoo, Lembang, Indonesia",
                    "description" => "Lembang Park & Zoo adalah tempat wisata kebun binatang & wahana permainan area
                keluarga.",
                    "path" => "images/popular-8.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 3,
                ],
                [
                    "location_name" => "De' Ranch, Lembang, Indonesia",
                    "description" => "De' Ranch adalah tempat wisata untuk keluarga yang ingin berkuda dan ingin menikmati keindahan alam",
                    "path" => "images/popular-9.webp",
                    "total_votes" => 10000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Braga, Bandung, Indonesia",
                    "description" => "Braga adalah sebuah jalan dimana pengunjung bisa menemukan berbagai hal di pinggir jalan.",
                    "path" => "images/popular-10.webp",
                    "total_votes" => 4000,
                    "average_rating" => 3.5,
                ],
                [
                    "location_name" => "Kampung Cai Ranca Upas, Ciwidey, Indonesia",
                    "description" => "Kampung Cai Ranca Upas adalah tempat dimana pengunjung bisa berkemah,
                    melihat penangkaran rusa, dan juga outbound yang bisa dicoba.",
                    "path" => "images/popular-11.jpg",
                    "total_votes" => 4000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Taman Hutan Raya Ir. H. Djuanda, Dago Pakar, Indonesia",
                    "description" => "Taman Hutan Raya ini adalah sebuah tempat dimana pengunjung dapat mencoba untuk
                    jalan jalan di tengah hutan tanpa keluar jauh jauh dari kota.",
                    "path" => "images/popular-12.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Tebing Keraton, Taman Hutan Raya Ir. H. Djuanda, Indonesia",
                    "description" => "Tebing Keraton adalah sebuah tebing dengan pemandangan yang luar biasa dan
                    pengunjung bisa melihat lautan pohon yang hijau dari atas tebing.",
                    "path" => "images/popular-13.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Rumah Guguk, Sukasari, Indonesia",
                    "description" => "Rumah Guguk adalah sebuah petshop dan juga tempat wisata bagi pet lovers.",
                    "path" => "images/popular-14.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "The Great Asia Africa Lembang, Lembang, Indonesia",
                    "description" => "The Great Asia Africa Lembang adalah tempat wisata cocok untuk
                    berfoto foto dengan latar belakang rumah rumah ala korea di masa lalu.",
                    "path" => "images/populer-15.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Branchsto Ganesha lembang, Lembang, Indonesia",
                    "description" => "Branchsto Ganesha Lembang adalah tempat yang menawarkan pengalaman berkuda.",
                    "path" => "images/populer-16.webp",
                    "total_votes" => 6000,
                    "average_rating" => 3,
                ], [
                    "location_name" => "Dusun Bambu Lembang, Lembang, Indonesia",
                    "description" => "Dusun Bambu Lembang adalah tempat wisata dengan keindahan alam dan suasana ala Sunda.",
                    "path" => "images/populer-17.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Dago Dream Park, Lembang, Indonesia",
                    "description" => "Dago Dream park adalah tempat wisata dengan berbagai aktivitas dan juga lokasi foto yang indah.",
                    "path" => "images/popular-19.jpg",
                    "total_votes" => 9000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Jendela Alam, Paronpong, Indonesia",
                    "description" => "Jendela Alam adalah tempat wisata edukasi mengenai alam dan berbagai kegiatan yang berhubungan.",
                    "path" => "images/popular-18.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "The Lodge Maribaya, Lembang, Indonesia",
                    "description" => "The Lodge Maribaya adalah tempat wisata yang cocok untuk pengunjuk yang menginginkan liburan yang unik.",
                    "path" => "images/popular-20.webp",
                    "total_votes" => 7000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Gunung Putri, Lembang, Indonesia",
                    "description" => "Gunung Putri adalah tempat wisata untuk para pengunjung yang suka mendaki gunung.",
                    "path" => "images/popular-21.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Bukit Moko, Lembang, Indonesia",
                    "description" => "Bukit Moko adalah tempat spot yang paling populer untuk melihat sunrise ataupun cahaya perkotaan Bandung di malam hari.",
                    "path" => "images/popular-22.jpg",
                    "total_votes" => 12000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Glamping Lakeside Rancabali, Rancabali, Indonesia",
                    "description" => "Glamping Lakeside Rancabali adalah tempat wisata dengan pemandangan danau yang indah,
                    udara yang sejuk, dan banyak lagi keindahan yang dimilikinya.",
                    "path" => "images/popular-23.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Taman Wisata Bougenville, Cimaung, Indonesia",
                    "description" => "Taman Wisata Bougenville adalah tempat wisata dengan villa villa mini
                    yang memiliki fasilitas yang ramah keluarga dan jauh dari kehidupan perkotaan.",
                    "path" => "images/popular-24.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Kebun Teh Sukawana, Cisarua, Indonesia",
                    "description" => "Kebun Teh Sukawana adalah tempat wisata kebun teh dengan atmosfer kebun teh dan juga pemandangan yang indah.",
                    "path" => "images/popular-25.jpg",
                    "total_votes" => 7000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Saung Angklung Udjo, Cibeunying Kidul, Indonesia",
                    "description" => "Saung Angklung Udjo adalah tempat wisata Bandung yang menawarkan budaya budaya bandung.",
                    "path" => "images/popular-26.jpg",
                    "total_votes" => 8000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Kawah Rengganis Ciwidey, Ciwidey, Indonesia",
                    "description" => "Kawah Rengganis Ciwidey adalah tempat wisata dengan pesona alam yang indah dan pengunjung juga bisa masuk ke dalam kolam pemandiannya.",
                    "path" => "images/popular-27.jpg",
                    "total_votes" => 2000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Taman Bunga Begonia, Lembang, Indonesia",
                    "description" => "Taman Bunga Begonia Lembang adalah tempat wisata kebun bunga yang luas mencapai 2 hektare dengan berbagai jenis bunga.",
                    "path" => "images/popular-28.jpg",
                    "total_votes" => 5000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Upside Down World, Coblong, Indonesia",
                    "description" => "Upside Down World adalah tempat wisata foto unik seolah sedang berdiri di berbagai ruangan terbalik.",
                    "path" => "images/popular-29.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Sanghyang Heuleut, Cipatat, Indonesia",
                    "description" => "Sanghyang Heuleut adalah  kolam alam yang sudah terbentuk sejak jaman prasejarah.",
                    "path" => "images/popular-30.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Sunrise Point Cukul, Pangalengan, Indonesia",
                    "description" => "Sunrise Point Cukul adalah tempat wisata untuk melihat matahari terbit yang akan muncul dari balik Gunung Wayang.",
                    "path" => "images/popular-31.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Trans studio Bandung, Cibangkong, Indonesia",
                    "description" => "Trans Studio Bandung adalah tempat wahana permainan indoor terbesar di Indonesia.",
                    "path" => "images/popular-32.jpg",
                    "total_votes" => 12000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Museum Geologi Bandung, Cibeunying Kaler, Indonesia",
                    "description" => "Museum Geologi Bandung adalah museum yang di dirikan pada tanggal 16 Mei 1928.",
                    "path" => "images/popular-33.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Taman Balai Kota Bandung, Sumur, Indonesia",
                    "description" => "Taman Balai Kota Bandung adalah taman yang dahulunya pernah disebut sebagai Taman Dewi Sartika karena terdapatnya patung sang tokoh pendidikan yaitu Dewi Sartika.",
                    "path" => "images/popular-34.jpg",
                    "total_votes" => 12000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Observatorium Bosscha, Cikahirupan, Indonesia",
                    "description" => "Observatorium Bosscha adalah tempat wisata edukasi mengenai ilmu astrohomi.",
                    "path" => "images/popular-35.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Amazing Art World, Sukasari, Indonesia",
                    "description" => "Amazing Art World adalah museum 3D art terbesar di dunia.",
                    "path" => "images/popular-36.jpg",
                    "total_votes" => 7000,
                    "average_rating" => 5,
                ],
                [
                    "location_name" => "Stone Garden Citatah, Padalarang, Indonesia",
                    "description" => "Stone Garden Citatah adalah tempat wisata yang menawarkan taman yang dipenuhi batu kapur purba.",
                    "path" => "images/popular-37.jpg",
                    "total_votes" => 6000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Rainbow Garden, Lembang, Indonesia",
                    "description" => "Rainbow Garden adalah tempat wisata kebun bunga berbagai warna.",
                    "path" => "images/popular-38.jpg",
                    "total_votes" => 4000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Situ Cisanti, Kertasari, Indonesia",
                    "description" => "Situ Cisanti adalah danau buatan yang menampung air dari 7 mata air.",
                    "path" => "images/popular-39.jpg",
                    "total_votes" => 3000,
                    "average_rating" => 4,
                ],
                [
                    "location_name" => "Ciwidey Valley Resort, Rancabali, Indonesia",
                    "description" => "Ciwidey Valley Resort adalah resort yang menyediakan berbagai macam fasitilas.",
                    "path" => "images/popular-40.jpg",
                    "total_votes" => 7000,
                    "average_rating" => 4,
                ]
            ]
        );
    }
}
