@extends('layouts.main')

@section('content')
<!-- START SINGLE BLOG POST DESIGN AREA -->
<section id="main-content" class="main-content-area">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <div class="row">
                    <!-- START BLOG CONTENT DESIGN AREA -->
                    <div class="col-md-8">
                        <!-- START POST DESIGN AREA -->
                        <div class="col-md-12">
                            <div class="single-blog-content blog-post-details">
                                <div class="single-post-titel text-center">
                                    <h3><a href="#">{{ $post->title }}</a></h3>
                                    <h4><a href="#">Author</a> : {{ $post->author }}</h4>
                                </div>
                                <div class="blog-post-image">
                                    <figure>
                                        <img src="{{ Storage::url($post->photo) }}" height="450" alt="Post">
                                    </figure>
                                </div>

                                <div class="post-meta-block single-blog-meta">
                                    <div class="post-meta-area">
                                        <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">{{ $post->author }}</a></div>
                                        <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->format('d M y') }} </a></div>
                                        <div class="post-date"><a href="#"><i class="fa fa-comment"></i> {{ count($post->comments) }}</a></div>
                                        <div class="post-date"><a href="#"><i class="fa fa-thumbs-up"></i>{{  $getLikes }}</a></div>
                                        <div class="post-date"><a href="#"><i class="fa fa-thumbs-down"></i>{{  $getDislikes }}</a></div>
                                    </div>
                                </div>

                                <div class="blog-post-content text-center">
                                    <!-- START POST TEXT CONTENT AREA -->
                                    <p>{{ $post->content }}</p>

                                    <!-- / END POST TEXT CONTENT AREA -->
                                </div>
                                <div class="blog-social-sharing-area">
                                    <div class="social-sharing-icon text-center">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                                            <li>
                                                <form action="{{ route('like', $post->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit">
                                                        @if (auth()->user())
                                                            <i class="fa fa-thumbs-up" style="{{ $post->isLikedBy(auth()->user()) ? 'color: blue' : ''}}">{{ $getLikes }}</i>
                                                        @else
                                                            <i class="fa fa-thumbs-up">{{ $getLikes }}</i>
                                                        @endif
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('dislike', $post->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit">
                                                        @if (auth()->user())
                                                        <i class="fa fa-thumbs-down" style="{{ $post->isDislikedBy(auth()->user()) ? 'color: red' : '' }}">{{ $getDislikes }}</i>
                                                        @else
                                                            <i class="fa fa-thumbs-down">{{ $getDislikes }}</i>
                                                        @endif
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / END POST DESIGN AREA -->

                        <!-- START RELATED POST DESIGN AREA -->
                        <div class="col-md-12 related-post-content-area">
                            <div class="related-post-content-body">
                                <div class="related-section-title text-center">
                                    <h2>Related posts</h2>
                                </div>

                                <div class="col-md-12">
                                    <div class="single-related-post-area">
                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/1.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 14 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->

                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/2.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 13 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->

                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/3.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 12 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->
                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/4.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 10 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->

                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/5.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 10 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->

                                        <!-- START SINGLE RELATED POST -->
                                        <div class="col-sm-4 single-related-post">
                                            <div class="related-post-item text-center">
                                                <div class="related-post-item-img">
                                                    <a href="#"><img src="{{ url('images/related-post/6.jpg') }}" alt="related post image"></a>
                                                </div>
                                                <h4><a href="#">Lorem Ipsum is simply demo</a></h4>
                                                <span><i class="fa fa-calendar"></i> 10 April, 2017  | <i class="fa fa-comment"></i>2</span>
                                            </div>
                                        </div>
                                        <!-- / END SINGLE RELATED POST -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / END RELATED POST DESIGN AREA -->

                        <!-- START COMMENT DESIGN AREA -->
                        <div class="comment-section wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                            <h4>Recent comments</h4>
                            @foreach($comments ?? [] as $comment)
                                <div class="single-comment">
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <h6 class="text-muted text-center">{{ $comment->user->name }}</h6>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="post-meta pull-left flip">
                                                <ul class="meta-lists">
                                                    <li><b><i class="fa fa fa-clock-o"></i> {{ $comment['created_at'] }}</b></li>
                                                </ul>
                                            </div>
                                            <br>
                                            <p class="text-content">{{ $comment->message }}</p>
                                            @can('admin-level')
                                                <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn-danger">Usuń</button>
                                                </form>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- / END COMMENT DESIGN AREA -->

                        <!-- START COMMENT FORM DESIGN AREA -->
                        <div class="contact-form blog-contact-form wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0">
                            <h3 class="comment-title">Dodaj komentarz</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form">
                                        <div class="row">
                                            <form action="{{ route('comment.store', $post->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group col-md-12">
                                                    <p>Treść</p>
                                                    <textarea rows="6" name="message" class="form-control" id="message" required="required"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit">Dodaj</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / END COMMENT FORM DESIGN AREA -->
                    </div>
                    <!-- / END BLOG CONTENT DESIGN AREA -->

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
<!-- / END SINGLE BLOG POST DESIGN AREA -->
@endsection
