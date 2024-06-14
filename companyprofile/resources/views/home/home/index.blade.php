<style>
    .wrapper-img-banner {
        max-width: 1000%;
        max-height: 700px;
    }

    .img-banner {
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

        @foreach ($banner as $key => $item)
        
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="wrapper-img-banner">
                <img src="/{{ $item->gambar }}" class="img-banner" alt="">
            </div>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>{{ $item->headline }}</h1>
                    <p>{{ $item->desc }}</p>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-5">
    <div class="text-center">
        <h4 class="text-center">ABOUT</h4>
        <div class="text-center"></div>
        <p>Anda Tahu kami? kami akan beri tahu anda</p>

        <div class="row">
            <div class="col-md-6">
                <img src="/{{ $about->cover }}" width="100%" alt="">
            </div>
            <div class="col-md-6">
                {{$about->desc}}
            </div>
        </div>

        <div class="bg-success my-2">
            <div class="container py-2">
                <div class="text-center text-white">
                    <h5>Pelajari Tentang Kami</h5>
                    <p>Surya Billiard berlokasi strategis di belakang Padang, mudah diakses, dan menawarkan suasana nyaman untuk bermain billiard, menjadikannya pilihan favorit bagi para penggemar billiard lokal.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="text-center">
            <h4 class="text-center">SERVICES</h4>
            <div class="text-center"></div>
            <p>Kami Memberikan pilihan paket biling</p>
            <div>
                <div class="row">
                    @foreach ($service as $item)
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="fas fa-home fa-3x text-success"></i>
                            <h5><b>{{ $item->title }}</b></h5>
                            <p>{{ $item->desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="/services" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="bg-light my-2">
        <div class="container py-2">
            <div class="text-center text-dark">
                <h5>Pelajari Tentang Kami</h5>
                <p>Surya Billiard berlokasi strategis di belakang Padang, mudah diakses, dan menawarkan suasana nyaman untuk bermain billiard, menjadikannya pilihan favorit bagi para penggemar billiard lokal.</p>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="text-center">
            <h4 class="text-center">Blog</h4>
            <p>Kami Memberikan pilihan paket biling</p>
            <div>
                <div class="row">


                    @foreach($blog as $item)
                    
                    
                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="wrapper-card-blog">
                                <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
                            </div>
                            <div class="p-2">
                                <a href="" class="text-decoration-none">
                                    <h5>{{ $item->title }}</h5>
                                </a>
                                <p>{{ Illuminate\Support\Str::limit ($item->body, 100) }}
                                    <a href="/blog/show/{{ $item->id }}"> Selengkapnya &RightArrow;</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-3">
            <a href="/blog" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="bg-light my-2">
        <div class="container py-2">
            <div class="text-center text-dark">
                <h5>Pelajari Tentang Kami</h5>
                <p>Surya Billiard berlokasi strategis di belakang Padang, mudah diakses, dan menawarkan suasana nyaman untuk bermain billiard, menjadikannya pilihan favorit bagi para penggemar billiard lokal.</p>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="text-center">
            <h4 class="text-center">Hubungi Kami</h4>
            <p></p>
            <a href="/contact" class="btn btn-success px-5" target="blank"><i class="fas fa-phone"></i> Hubungi Kami!</a>
        </div>
    </div>
</div>