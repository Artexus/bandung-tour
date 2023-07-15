<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bandung Tour</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    <!-- normalize css -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <!-- navbar  -->
    <nav class="navbar">
        <div class="container flex">
            <a href="{{ route('HomePage') }}" class="site-brand">
                Bandung<span>Tour</span>
            </a>

            <button type="button" id="navbar-show-btn" class="flex">
                <i class="fas fa-bars"></i>
            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href={{ route('HomePage') }} class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('GalleryPage') }} class="nav-link">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('BookingPage') }}" class="nav-link">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('AboutPage') }} class="nav-link">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('ContactPage') }} class="nav-link">Kontak Kami</a>
                    </li>

                    @if (Auth::user())
                        <li class="nav-item">
                            <a href="{{ route('Logout') }}" class="nav-link">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('LoginPage') }}" class="nav-link">Login</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <!-- end of navbar  -->
    @yield('content')

    <!-- footer -->
    <footer class="py-4">
        <div class="container footer-row">

            <div class="footer-item">
                <h2>Ikuti Kami : </h2>
                <ul class="social-links">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="subscribe-form footer-item">
                <h2>Subscribe!</h2>
                <form class="flex">
                    <input type="email" placeholder="Enter Email" class="form-control">
                    <input type="submit" class="btn" value="Subscribe">
                </form>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!-- js -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // play/pause video
        let video = document.querySelector('.video-wrapper video');
        document.getElementById('play-btn').addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    </script>
</body>

</html>
