@extends('layouts.main')

@section('content')

<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">
    <div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-text header-desc-area">
                                <h2>Twój ulubiony blog!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

<!-- START MAIN CONTENT DESIGN AREA -->
<section id="main-content" class="main-content-area">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <div class="row">
                    <!-- START POST CONTENT DESIGN AREA -->
                    <div class="col-md-8 post-content-area">
                        @foreach($posts ?? [] as $post)
                        <div class="row">
                            <!-- START SINGLE POST CONTENT DESIGN AREA -->
                            <div class="col-md-12">
                                <div class="single-blog-content">
                                    <div class="single-post-titel text-center">
                                        <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                                        <h4>Autor: {{ $post->author }}</h4>
                                    </div>
                                    <div class="blog-post-image">
                                        <figure>
                                            <img src="{{ Storage::url($post->photo) }}" height="400" alt="Post">
                                        </figure>
                                    </div>

                                    <div class="post-meta-block">
                                        <div class="post-meta-area">
                                            <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Autor: {{ $post->author }}</a></div>
                                            <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->format('d M y') }}</a></div>
                                            <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> {{ count($post->comments) }}</a></div>
                                            <div class="post-date"><a href="#"><i class="fa fa-thumbs-up"></i>{{ count($post->likes->where('like', 1)) }}</a></div>
                                            <div class="post-date"><a href="#"><i class="fa fa-thumbs-down"></i>{{ count($post->likes->where('like', 0)) }}</a></div>
                                        </div>
                                    </div>

                                    <div class="blog-post-content text-center">
                                        <p class="blog-post-desc">{{$post->content}}
                                            <br>
                                            <a href="{{ route('post.show', $post->id) }}">Czytaj</a>
                                    </div>
                                    <div class="blog-social-sharing-area">
                                        <div class="social-sharing-icon text-center">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                        </div>
                    @endforeach

                        <!-- START PAGINATION -->
                        <div class="pagination-area">
                            <ul class="pagination-nav">
                                {{ $posts->links() }}
                            </ul>
                        </div>
                        <!-- / END PAGINATION -->

                    </div>

                    <!-- / END POST CONTENT DESIGN AREA -->

                    <div class="col-md-4 sidebar-area">
                        <div class="sidebar">
                            @include('sidebar')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END MAIN CONTENT DESIGN AREA -->

<!-- START PHOTO GALLERY DESIGN AREA -->
<section id="photo-gallery" class="photo-gallery-area section-padding" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4 section-title">
                    <h2>Photo Gallery</h2>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="row">
            <div class="photo-gallery-list wow fadeInUp">
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <div class="item">
                        <figure><img src="{{ url('images/photo-gallery/1.jpg') }}" alt=""></figure>
                    </div>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/2.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/3.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <div class="item">
                        <figure><img src="{{ url('images/photo-gallery/4.jpg') }}" alt=""></figure>
                    </div>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/5.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/6.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <div class="item">
                        <figure><img src="{{ url('images/photo-gallery/7.jpg') }}" alt=""></figure>
                    </div>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/8.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                <div class="photo-gallery-photo text-center">
                    <figure><img src="{{ url('images/photo-gallery/9.jpg') }}" alt=""></figure>
                </div>
                <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
            </div>
        </div>
    </div>
</section>
<!-- / END PHOTO GALLERY DESIGN AREA -->
@endsection
