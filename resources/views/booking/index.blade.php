@extends('layout.layout')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

        <div class="search-container" style="position:relative">
            <input type="text" id="search-bar" placeholder="Pilih Nama Tempat dan Lokasi">

            <img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png">

            <div id="search-res" hidden
                style="height: 20em; width:100%; overflow-y: scroll; margin:0; position:absolute;  top:60px; z-index:99; padding: 20px 20px; background-color: white; border: 1px solid #D0CFCE;">
            </div>
        </div>


        <div id="container-booking" style="padding-top:5em;" hidden class="">
            <form action={{ route('AddCart') }} method="POST" id="booking-form">
                @csrf
                <div class="flex">
                    <img id="image" src={{ asset('images/popular-1.jpg') }} alt=""
                        style="width: 25%;height: 25%">
                    <div style="margin-left:3%; width:20%">
                        <h3 id="location-name">Nama Lokasi</h3>
                        <p id="description">Deskripsinya</p>
                    </div>
                </div>


                <div class="flex">
                    <div style="padding-top:5%; text-align: center">
                        <h2>Pilih Tiket yang Diinginkan</h2>

                        <select id="ticket-select" name="ticket_id" id="" style="width:100%" form="booking-form">
                            <option value="" hidden>Example Placeholder</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                            <option value="5">Option 5</option>
                        </select>

                        <div hidden id="detail">
                            <h2>Jumlah Tiket</h2>
                            <input id="ticket-quantity" type="number" name="quantity" min="1" value="1"
                                style="text-align: center">

                            <h2>Total Harga</h2>
                            <p id="price-total">5000</p>
                        </div>

                    </div>


                </div>

                <div class="flex" style="padding-top: 5%">
                    <div class="wrap">
                        <input type="submit" value="Order" class="button">
                    </div>

                </div>
            </form>
        </div>

    </section>


    <section id="cart" style="position: relative; padding-top:2%">
        <hr>
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title">Keranjang Saya</h2>
            </div>

            @foreach ($carts as $cart)
                <ul class="flex" style="justify-content: space-around">
                    <li class="flex">
                        <img src={{ asset($cart->tickets->sites->path) }} alt="" style="width:86px; height:86px">
                        <div style="padding-left:10px; width:180px">
                            <b>
                                {{ $cart->tickets->sites->location_name }}
                            </b>
                            <p>
                                {{ $cart->quantity }} x IDR. {{ $cart->tickets->price }}
                            </p>
                        </div>
                    </li>

                    <li style="width:25%">
                        <div style="display: flex; justify-content:space-around; align-items: center">
                            <div>
                                {{ $cart->quantity * $cart->tickets->price }}
                            </div>
                            <div>
                                <form action={{ route('DeleteCart') }} id="delete-cart" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="cart_id" value={{ $cart->id }}>
                                    <input type="submit" value="delete" class="button">
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            @endforeach


            @if (count($carts) > 0)
                <div class="flex" style="padding: 5% 0;">
                    <div class="wrap">
                        <input type="submit" value="Checkout" class="button">
                    </div>
                </div>
            @endif

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src={{ asset('js/booking.js') }}></script>
@endsection
