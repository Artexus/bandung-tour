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
                    <h1 class="card-title">Create your new Password</h1>
                    <div class="pt-5">
                        <form action="{{ route('SubmitNewPassword') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInput" name="new_password"
                                    placeholder="Password">
                                <label for="floatingInput">New Password</label>
                            </div>

                            <div class="mt-4 form-floating">
                                <input type="password" class="form-control" id="floatingConfirm" name="confirm_password"
                                    placeholder="Password">
                                <label for="floatingConfirm">Confirm New Password</label>
                            </div>

                            <input type="submit" class="mt-5 btn btn-lg btn-outline-dark w-100">
                        </form>
                    </div>
                    <div class="pt-5">
                        @if ($errors->all())
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
