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
                    <h1 class="card-title">Forgot Password?</h1>
                    <h6 class="card-subtitle mb-2 text-body-secondary">No worries, we'll send you reset instructions</h6>
                    <div class="pt-5">
                        <form action="{{ route('SubmitForgot') }}" class="form-floating" method="POST">
                            @csrf
                            <input type="email" class="form-control" id="floatingInput" name="email"
                                placeholder="Email">
                            <label for="floatingInput">Email address</label>

                            <input type="submit" class="mt-5 btn btn-lg btn-outline-dark w-100">
                        </form>
                    </div>
                    <div class="pt-5">
                        @if ($errors->all())
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <a href="{{ route('LoginPage') }}"
                            class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg> Back to Login </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
