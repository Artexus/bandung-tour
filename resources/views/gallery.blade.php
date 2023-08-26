@extends('layout.layout')

@section('content')
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>Galeri</h1>
                <p>Berbagai Macam Tempat wisata liburan di daerah Bandung</p>
            </div>
        </div>
    </header>
    <!-- gallery section -->
    <div id="gallery" class="py-4">
        <div class="container">
            <div class="gallery-row">
                <div class="gallery-item shadow">
                    <img src="images/gallery-1.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-2.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-3.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-4.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-5.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-6.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-7.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-8.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/gallery-9.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of gallery section -->

    <!-- img modal -->
    <div id="img-modal-box">
        <div id="img-modal">
            <button type="button" id="modal-close-btn" class="flex">
                <i class="fas fa-times"></i>
            </button>
            <button type="button" id="prev-btn" class="flex">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" id="next-btn" class="flex">
                <i class="fas fa-chevron-right"></i>
            </button>
            <img src="images/GedungSate-Wallpaper.jpg">
        </div>
    </div>
    <!-- end of img modal -->

    <!-- popular places section -->
    <section id="popular" class="py-4">
        <div class="title-wrap">
            <h2 class="lg-title">TEMPAT WISATA TERKENAL DI KOTA BANDUNG</h2>
        </div>

        <div class="popular-row">

            @foreach ($sites as $site)
                <div class="popular-item shadow">
                    <img src={{ asset($site->path) }} alt="">
                    <div>
                        <span>{{ $site->location_name }}</span>
                        <ul class="rating flex">
                            @for ($i = 0; $i < (int) $site->average_rating; $i++)
                                <li><i class="fas fa-star"></i></li>
                            @endfor
                            @if ($site->average_rating % (int) $site->average_rating > 0)
                                <li><i class="fas fa-star-half-alt"></i></li>
                            @endif

                            @if ($site->total_votes >= 1000)
                                <li>&nbsp;{{ $site->total_votes / 1000 }}K Reviews</li>
                            @else
                                <li>&nbsp;{{ $site->total_votes }} Reviews</li>
                            @endif

                        </ul>
                        <p class="text-justify" style="width:85%">
                            {{ $site->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end of popular places section -->
    <script src="js/script.js"></script>
    <script>
        // image modal
        const allGalleryItem = document.querySelectorAll('.gallery-item');
        const imgModalDiv = document.getElementById('img-modal-box');
        const modalCloseBtn = document.getElementById('modal-close-btn');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        let imgIndex = 0;

        allGalleryItem.forEach((galleryItem) => {
            galleryItem.addEventListener('click', () => {
                imgModalDiv.style.display = "block";
                let imgSrc = galleryItem.querySelector('img').src;
                imgIndex = parseInt(imgSrc.split("-")[1].substring(0, 1));
                showImageContent(imgIndex);
            })
        });

        // next click
        nextBtn.addEventListener('click', () => {
            imgIndex++;
            if (imgIndex > allGalleryItem.length) {
                imgIndex = 1;
            }
            showImageContent(imgIndex);
        });

        // previous click
        prevBtn.addEventListener('click', () => {
            imgIndex--;
            if (imgIndex <= 0) {
                imgIndex = allGalleryItem.length;
            }
            showImageContent(imgIndex);
        });

        function showImageContent(index) {
            imgModalDiv.querySelector('#img-modal img').src = `images/gallery-${index}.jpg`;
        }

        modalCloseBtn.addEventListener('click', () => {
            imgModalDiv.style.display = "none";
        })
    </script>
@endsection
