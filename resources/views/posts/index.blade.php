{{-- @extends('layouts.app')
@section('content')


    <div class="content">
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">

                    @if ($posts->isEmpty())
                        <div class="col-lg-8 align-self-end">
                            <h1 class="text-white font-weight-bold">No posts found in this category.</h1>
                            <hr class="divider" />
                        </div>
                    @else
                        @foreach ($posts as $post)
                            <div class="col-lg-8 align-self-end">
                                <h1 class="text-white font-weight-bold">{{ $post->title }}</h1>
                                <hr class="divider" />
                            </div>
                        @endforeach
                    @endif
                    <div class="col-lg-8 align-self-baseline">
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        @if ($posts->isEmpty())
            <section class="page-section bg-primary" id="about">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="text-white mt-0">No posts found in this category.</h2>
                            <hr class="divider divider-light" />
                            <p class="text-white-75 mb-4">No posts found in this category.</p>
                        </div>
                    </div>
                </div>
            </section>
        @else
            @foreach ($posts as $post)
                <section class="page-section bg-primary" id="about">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h2 class="text-white mt-0">{{ $post->title }}</h2>
                                <hr class="divider divider-light" />
                                <p class="text-white-75 mb-4">{{ $post->body }}</p>
                                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services-->
                <section class="page-section" id="services">
                    <div class="container px-4 px-lg-5">
                        <h2 class="text-center mt-0">Image</h2>
                        <hr class="divider" />
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Sturdy Themes</h3>
                                    <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Up to Date</h3>
                                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Ready to Publish</h3>
                                    <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Made with Love</h3>
                                    <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Call to action-->
                <section class="page-section bg-dark text-white">
                    <div class="container px-4 px-lg-5 text-center">
                        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                        <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
                    </div>
                </section>
            @endforeach
        @endif

        <!-- Contact-->

    </div>
@endsection --}}

@extends('layouts.app')
@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">

            @if ($posts->isEmpty())
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">No posts found in this category.</h1>
                    <hr class="divider" />
                </div>
            @else
                @foreach ($posts as $post)
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">{{ $post->title }}</h1>
                        <hr class="divider" />
                    </div>
                @endforeach
            @endif
            <div class="col-lg-8 align-self-baseline">
            </div>
        </div>
    </div>
</header>
<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach ($posts as $post)

        <div class="col-lg-8">
            @if($post)

                <h1 class="mb-4">{{ $post->title }}</h1>
                @if($post->image)
                    <div class="text-center my-4">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid w-50" alt="{{ $post->title }}">
                    </div>
                @endif
                <p class="text-75 mb-4">{!! nl2br(str_replace("\n", "\n\n", strip_tags($post->body))) !!}</p>

                <div class="mt-4">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                </div>

            @else
                <h2 class="text-center">Post not found</h2>
            @endif
        </div>
        @endforeach
    </div>
</div>

@endsection
