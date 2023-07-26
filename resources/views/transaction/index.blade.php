@extends('layout.layout')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection


@section('content')
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Pesanan Saya</h1>
                <p>Lihat riwayat transaksi kamu disini</p>
            </div>
        </div>
    </header>

    <section id="transaction-history" class="py-4">

        <div style="position:relative; width:100%; justify-content:center; display:flex">
            <div
                style=" height:50em; width:80%; overflow-y: scroll; margin:0; z-index:99; background-color: white; border: 1px solid #D0CFCE;">

                @if (count($transactions) <= 0)
                    <div class="flex" style="justify-content: center; padding:2%">
                        <h2>Kamu belum melakukan transaksi.</h2>
                    </div>
                @else
                    @foreach ($transactions as $transaction)
                        <div class="flex" style="justify-content: space-between; padding:2%">
                            <div class="">
                                <h3>{{ $transaction->invoice_id }}</h3>
                                {{ $transaction->created_at }}
                            </div>


                            <div class="">
                                @foreach ($details[$transaction->invoice_id]->contents as $content)
                                    <div style="margin-top:10%">
                                        {{ $content->location_name . ' - ' . ucfirst($content->ticket_name) }}
                                        <div style="margin-left: 20px">
                                            {{ $content->quantity . '*' . $content->price }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="">
                                <b>{{ $details[$transaction->invoice_id]->total_amount }}</b>
                            </div>
                            <div class="">
                                <b>{{ $transaction->status }}</b>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif

            </div>
        </div>

    </section>
@endsection
