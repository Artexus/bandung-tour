@extends('layout.layout')

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
                    <svg xmlns="http://www.w3.org/2000/svg" height="9.5em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #4bb22e
                            }
                        </style>
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                    <h1 class="card-title">Success !</h1>

                    <h6 class="card-subtitle mb-2 text-body-secondary">You Have Successfully Create a New Password </h6>
                    <div class="pt-5">

                        <a href="{{ route('LoginPage') }}" class="mt-5 btn btn-lg btn-outline-dark w-100">
                            <i class="fa fa-arrow-left pe-2" aria-hidden="true"></i>Back to Login </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
