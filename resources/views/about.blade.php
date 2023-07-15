@extends('layout.layout')

@section('content')
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Tentang Bandung Tour</h1>
                <p>Bandung Tour adalah situs website yang menyediakan pemesanan tempat wisata liburan yang khusus berada di
                    daerah Bandung.</p>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- about section -->
    <section id="about" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title">Profil Bandung Tour</h2>
            </div>

            <div class="about-row">
                <div class="about-left my-2">
                    <img src={{ asset('images/about-1.jpg') }} alt="about img">
                </div>
                <div class="about-right">
                    <h2>Bandung Tour</h2>
                    <p class="text-justify">Bandung Tour adalah situs website yang menyediakan pemesanan tempat wisata
                        liburan yang khusus berada di daerah Bandung. Bandung Tour menyediakan beberapa tempat wisata
                        liburan yang menarik & terkenal di Bandung.</p>
                    <p class="text-justify">Alasan kami membuat situs website Bandung Tour karena Bandung memiliki nilai
                        tempat sejarah yang panjang & menarik bagi masyarakat. Jadi kami memiliki ide & berinisiatif untuk
                        membuat sebuah aplikasi pemesanan tempat wisata Bandung yang dapat digunakan oleh seluruh masyarakat
                        Indonesia.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about section -->

    <!-- facts section -->
    <section id="facts" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title" style="color:white;"> CEO Bandung Tour </h2>
            </div>

            <div class="facts-row">
                <div class="facts-item">
                    <div class="facts-item-info">
                        <img src={{ asset('images/Rafli-Wallpaper.jpg') }} alt="facts">
                        <div>
                            <h3>Rafli Muhammad</h3>
                            <Strong>Chief Executive Officer Bandung Tour</Strong>
                        </div>
                    </div>
                </div>


                <div class="facts-item">
                    <div class="facts-item-info">
                        <img src={{ asset('images/Dimas-Wallpaper.jpg') }} alt="facts">
                        <div>
                            <h3>Dimas Ramandika</h3>
                            <Strong>Vice Chief Executive Officer Bandung Tour</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
