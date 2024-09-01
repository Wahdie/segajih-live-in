
@extends('layouts.app')
@section('content')

<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Welcome to Blog Home</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white font-weight-bold">Mari Jelajahi Segajih dari Artikel kami</p>
            </div>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container mt-4">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="{{ asset('assets/img/sandi.JPEG') }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">Senin 29 Mei 2023</div>
                    <h2 class="card-title">Kulon Progo Hattrick Desa Wisata Terbaik di Indonesia, Sandiaga: Luar Biasa!</h2>
                    <p class="card-text">Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta (DIY), meraih penghargaan Anugerah Desa Wisata Indonesia (ADWI) untuk ketiga kalinya selama tiga tahun berturut-turut. Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Salahuddin Uno menyebut raihan ini menjadi yang pertama di Indonesia.</p>
                    <a class="btn btn-primary" href="https://www.detik.com/jateng/wisata/d-6744366/kulon-progo-hattrick-desa-wisata-terbaik-di-indonesia-sandiaga-luar-biasa">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($pages as $page )

                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        {{-- <a href="#!"><img class="card-img-top" src="{{ Voyager::image($page['image'])}}" alt="..." /></a> --}}
                        <a href=""><img class="card-img-top w-25" src="{{ asset('storage/') }}/{{ $page['image'] }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $page['created_at'] }}</div>
                            <h2 class="card-title h4">{{ $page['title'] }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($page['body']), 100)}}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            <!-- Pagination-->
            {{-- <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav> --}}
             <!-- Pagination-->
             {{-- <nav aria-label="Pagination">
                <ul class="pagination justify-content-center my-4">
                    {{ $pages->links() }}
                </ul>
            </nav> --}}
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
@endsection
