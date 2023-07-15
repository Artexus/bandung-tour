@extends('layout.layout')

@section('content')
    <!-- header -->
    <header class="flex">
        <div class="container">
            <div class="header-title">
                <h1>Selamat Datang Di Bandung Tour</h1>
                <p>Bandung Tour adalah situs website yang menyediakan pemesana tempat wisata liburan yang khusus berada di
                    daerah Bandung.</p>
            </div>
    </header>

    <section id="featured" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title">Tempat Wisata Terkenal Di Kota Bandung</h2>
            </div>

            <div class="featured-row">
                <div class="featured-item my-2 shadow">
                    <img src="images/popular-1.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Gedung Sate, Bandung, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Gedung ini memiliki ciri khas berupa ornamen tusuk sate pada menara
                                sentralnya. Gedung Sate adalah gedung kantor Gubernur Jawa Barat.</>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/popular-2.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Tangkuban Perahu, Lembang, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Gunung Tangkuban Perahu adalah gunung yang terletak di Lembang. Dengan
                                rimbun pohon pinus & hamparan kebun teh disekitarnya</>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/popular-3.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Kawah Putih, Ciwidey, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Tanah yang bercampur belerang disekitar kawah ini berwarna putih,
                                Kemudian warna air yang berada di kawah ini berwarna putih kehijauan.</>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/popular-4.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Lembang Park Zoo, Lembang, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Lembang Park & Zoo adalah taman hiburan & kebun binatang yang terletak
                                di
                                Lembang.</>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/popular-5.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Farm House, Lembang, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Farm house adalah jenis hunian peternakan di pedesaan yang memiliki
                                desain yang sederhana & minimalis dengan nuansa alami.</>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/popular-6.jpg" alt="Tempat Wisata Terkenal Bandung">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Floating Market, Lembang, Indonesia
                        </span>
                        <div>
                            <p class="text-justify">Floating Market Lembang adalah tempat berbelanja pengalaman berbelanja &
                                makan di atas perahu di tengah kolam.</>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured section -->

    <!-- testimonials section -->
    <section id="testimonials" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title" style="color:white;"> Testimoni Terhadap Aplikasi Kami </h2>
            </div>

            <div class="test-row">
                <div class="test-item">
                    <p class="text-justify">Aplikasinya sangat bagus sekali, Memudahkan saya untuk mencari tempat wisata
                        yang
                        asik untuk dikunjungi.</p>
                    <div class="test-item-info">
                        <img src="images/VinDiesel-Wallpaper.jpg" alt="testimoni">
                        <div>
                            <h3>Vin Diesel</h3>
                        </div>
                    </div>
                </div>

                <div class="test-item">
                    <p class="text-justify">Proses pemesanan yang mudah & banyak sekali promo</p>
                    <div class="test-item-info">
                        <img src="images/PaulWalker-Wallpaper.jpg" alt="Testimoni">
                        <div>
                            <h3>Paul Walker</h3>
                        </div>
                    </div>
                </div>

                <div class="test-item">
                    <p class="text-justify">Bagus banget aplikasinya jadi kita bisa tahu seputar informasi & sejarah
                        terhadap
                        tempat wisata yang kita kunjungi.</>
                    <div class="test-item-info">
                        <img src="images/JasonStatham-Wallpaper.jpg" alt="Testimoni">
                        <div>
                            <h3>Jason Statham</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of testimonials section -->
@endsection
