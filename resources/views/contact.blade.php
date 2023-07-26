@extends('layout.layout')

@section('content')
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Kontak</h1>
                <p>Kami siap melayani pemesanan anda & melayani segala permintaan anda di Bandung Tour.</p>
            </div>
        </div>
    </header>

    <section id="contact" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title">Hubungi Kami</h2>
            </div>

            <div class="contact-row">
                <div class="contact-left">
                    <form class="contact-form" action='mailto:bandungtour@gmail.com' id="contact-form">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Nama Anda">
                        <input type="email" name="email"class="form-control" placeholder="Email Anda">
                        <textarea rows="4" form="contact-form" name="message" class="form-control" placeholder="Pesan Anda"
                            style="resize: none;"></textarea>
                        <input type="submit" class="btn" value="Kirim Pesan">
                    </form>
                </div>
                <div class="contact-right my-2">
                    <div class="contact-item">
                        <span class="contact-icon flex">
                            <i class="fa fa-phone-alt"></i>
                        </span>
                        <div>
                            <span>Nomor Telepon</span>
                            <p class="text">+62-813-7700-0077</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon flex">
                            <i class="fa fa-map-marked-alt"></i>
                        </span>
                        <div>
                            <span>Alamat Jalan</span>
                            <p class="text">Jalan Asia Afrika No 07, Bandung, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon flex">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div>
                            <span>Email</span>
                            <p class="text">bandungtour@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
