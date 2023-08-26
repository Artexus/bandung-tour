@extends('layout.empty')

@section('import')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection


@section('content')
    <div class="d-flex container-fluid align-items-center justify-content-center" style="border:solid 1px; height:100vh; ">
        <div class="card text-center p-5 w-50 justify-content-center" style="height: 75%">
            <div class="d-flex align-items-center justify-content-center card-body">
                <div class="w-75">
                    <svg xmlns="http://www.w3.org/2000/svg" height="10em" viewBox="0 0 24 24">
                        <path
                            d="M4.76,10.59a1,1,0,0,0,.26-2L3.26,8.15a1,1,0,1,0-.52,1.93l1.76.47A.78.78,0,0,0,4.76,10.59ZM8.62,5a1,1,0,0,0,1,.74.82.82,0,0,0,.26,0,1,1,0,0,0,.7-1.22l-.47-1.76a1,1,0,1,0-1.93.52Zm4.83,10A1,1,0,0,0,12,15L8.5,18.56a2.21,2.21,0,0,1-3.06,0,2.15,2.15,0,0,1,0-3.06L9,12a1,1,0,1,0-1.41-1.41L4,14.08A4.17,4.17,0,1,0,9.92,20l3.53-3.53A1,1,0,0,0,13.45,15ZM5.18,6.59a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41L5.3,3.89A1,1,0,0,0,3.89,5.3Zm16.08,7.33-1.76-.47A1,1,0,1,0,19,15.38l1.76.47.26,0a1,1,0,0,0,.26-2ZM15.38,19a1,1,0,0,0-1.23-.7,1,1,0,0,0-.7,1.22l.47,1.76a1,1,0,0,0,1,.74,1.15,1.15,0,0,0,.26,0,1,1,0,0,0,.71-1.23Zm3.44-1.57a1,1,0,0,0-1.41,1.41l1.29,1.29a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM21.2,7A4.16,4.16,0,0,0,14.08,4L10.55,7.56A1,1,0,1,0,12,9L15.5,5.44a2.21,2.21,0,0,1,3.06,0,2.15,2.15,0,0,1,0,3.06L15,12a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0L20,9.92A4.19,4.19,0,0,0,21.2,7Z" />
                    </svg>

                    <h1 class="card-title">Link Kadaluarsa</h1>

                    <h6 class="card-subtitle mb-2 text-body-secondary">Maaf, Link sudah kadaluarsa. Mohon dicoba kembali
                    </h6>

                </div>
            </div>
        </div>
    </div>
@endsection
