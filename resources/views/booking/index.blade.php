@extends('layout.layout')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection


@section('content')
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Saatnya menjelajahi</h1>
                <p>Temukan dan pesan pengalaman menarik</p>
            </div>
        </div>
    </header>

    <section id="popular" class="py-4">
        <div class="title-wrap">
            <h2 class="lg-title">Pilih Tempat Wisatamu</h2>
        </div>

        <form class="search-container">
            <input type="text" id="search-bar" placeholder="Pilih Nama Tempat dan Lokasi">

            <img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png">

            @if (isset($data))
                <div
                    style="height: 20em; width:100%; overflow-y: scroll; margin:0; position:relative; padding: 20px 20px; border: 1px solid #D0CFCE;">
                    @if (count($data) > 0)
                        @foreach ($entity as $data)
                            <div class="search-bar-res" id={{ $entity->location_name }}>
                                {{ $entity->location_name }}
                            </div>
                        @endforeach
                    @endif
                </div>
            @endif


        </form>
    </section>


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


    <script>
        document
    </script>
@endsection
