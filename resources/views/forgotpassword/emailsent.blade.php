@extends('layout.empty')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection


@section('content')
    <div class="d-flex container-fluid align-items-center justify-content-center"
        style="border:solid 1px; height:100vh; background: white">
        <div class="card text-center p-5 w-50 justify-content-center" style="height: 75%">
            <div class="d-flex align-items-center justify-content-center card-body">
                <div class="w-75">

                    <svg xmlns="http://www.w3.org/2000/svg" height="15em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <h1 class="card-title">Check your Email</h1>

                    <h6 class="card-subtitle mb-2 text-body-secondary">We have sent a link for password recovery to your
                        email</h6>

                    <div class="pt-5">

                        <a href="{{ route('LoginPage') }}" class="mt-5 btn btn-lg btn-outline-dark w-100">
                            <i class="fa fa-arrow-left pe-2" aria-hidden="true"></i>Back to Login </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
