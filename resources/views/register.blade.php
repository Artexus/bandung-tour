@extends('layout.empty')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection


@section('content')
    <!-- header -->

    <div class="d-flex align-items-center justify-content-center w-100" style="height:100vh;">
        <div class="w-75 h-75"
            style="color:white; display:inherit; border-radius:30px; border:1px solid; border-color: gray;">
            <div
                style="border-top-left-radius: 30px; border-bottom-left-radius: 30px; background-color:rgba(218, 219, 219, 0.205); width:65%; height:100%; display:inherit; align-items:center; justify-content:center; display:inherit ">
                <div style="text-align: center">
                    <h1>Daftar Akun Baru </h1>
                    <form action="{{ route('SubmitRegister') }}" method="POST" style="display: inline">
                        @csrf
                        <div class="form-floating mt-5">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Name">
                            <label style="color:gray" for="floatingName">Nama</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="email" class="form-control" id="floatingEmail" name="email"
                                placeholder="Email">
                            <label style="color:gray" for="floatingEmail">Email</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password"
                                placeholder="Password">
                            <label style="color:gray" for="floatingPassword">Password</label>
                        </div>

                        <div style="padding: 5% 0% 0% 0%">
                            <input type="submit" class="mt-5 btn btn-lg btn-light w-100">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                        </div>
                </div>

            </div>
            <div
                style="width:35%; height:100%; border-radius:0px 30px 30px 0px;background: white; display:inherit; align-items:center; justify-content:center; display:inherit ">
                <div style="text-align: center; color:black">
                    <h1>Sudah Memiliki Akun?</h1>
                    <h4 class="card-text">Ayo Cepat Sign in Disini</h4>

                    <a href="{{ route('LoginPage') }}" class="text-decoration-none mt-5 w-100 btn btn-dark">Sign In</a>

                </div>

            </div>
        </div>
    </div>
@endsection
