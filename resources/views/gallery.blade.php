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
            <div class="popular-item shadow">
                <img src={{ asset('images/popular-1.jpg') }} alt="">
                <div>
                    <span>Gedung Sate, Citarum, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;10K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Gedung Sate adalah gedung yang memiliki kesan sejarah
                        sangat kuat bagi
                        masyarakat Bandung & Indonesia. Gedung ini menjadi simbol kejayaan arsitektur Hindia-Belanda.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-2.jpg" alt="">
                <div>
                    <span>Tangkuban Perahu, Lembang, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                        <li>&nbsp;9,5K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Tangkuban Perahu adalah gunung berapi aktif. Keindahan alamnya
                        yang indah
                        contohnya seperti danau & kawah di puncak gunung.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-3.jpg" alt="">
                <div>
                    <span>Kawah Putih, Ciwidey, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;9K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Kawah Putih dahulu tempat pabrik belerang masa kolonial
                        Belanda yang bernama
                        Zwavel Ontgining. Kawah putih adalah danau yang terbentuk akibat letusan Gunung Patuha.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-4.jpg" alt="">
                <div>
                    <span>Lembang Park & Zoo, Lembang, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;7K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Lembang Park & Zoo adalah tempat wisata kebun binatang &
                        wahana permainan area
                        keluarga.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-5.jpg" alt="">
                <div>
                    <span>Farm House, Lembang, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;8K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Farm House adalah tempat wisata dengan konsep pedesaan Eropa
                        dengan berbagai
                        fasilitas menarik seperti Kebun Binatang Mini, Kolam Ikan & Taman Bunga.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-6.jpg" alt="">
                <div>
                    <span>Floating Market, Lembang, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;5K Reviews</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Floating Market adalah tempat kuliner makanan & minuman
                        tradisional terapung di
                        dalam kapal serta melihat suasana alam yang indah.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-7.jpg" alt="">
                <div>
                    <span>Orchid Forest, Cikole, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                        <li>&nbsp;4K Reviews</li>
                    </ul>
                    <p class="text-justify"style="width:85%">Orchid Forest adalah Taman yang memiliki koleksi orchid &
                        menyediakan berbagai
                        fasilitas rekreasi.</p>
                </div>
            </div>

            <div class="popular-item shadow">
                <img src="images/popular-9.jpg" alt="">
                <div>
                    <span>Taman Wisata Bougenville, Cimaung, Indonesia</span>
                    <ul class="rating flex">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li>&nbsp;3K Reviewss</li>
                    </ul>
                    <p class="text-justify" style="width:85%">Taman Wisata Bougenville adalah pengunjung bisa melihat
                        tempat bunga
                        bougenville
                        bermekaran, Terdapat tempat kuliner makanan & tempat wisata permainan anak-anak.</p>
                </div>
            </div>
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
