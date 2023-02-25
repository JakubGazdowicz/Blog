

    <!-- START SIDEBAR CONTENT DESIGN AREA -->


            <!-- START ABOUT ME DESIGN AREA -->
            <div class="right-sidebar sidebar-about-me-area text-center">
                <div class="sidebar-about-me-area-content">
                    <div class="widget-title">
                        <h4>O mnie</h4>
                    </div>
                    <div class="widget-about-thumb">
                        <figure>
                            <a href="#"><img src="{{ url('images/about/about.jpg') }}" alt="img" class="img-responsive"></a>
                        </figure>
                    </div>
                    <div class="widget-about-content">
                        <h4><a href="{{ route('contact') }}">Scott Stainly</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <a href="{{ route('contact') }}" class="read-more">Kontakt</a>
                    </div>
                </div>
            </div>
            <!-- / END ABOUT ME DESIGN AREA -->

            <!-- START RECENT POSTS DESIGN AREA -->
            <div class="right-sidebar recent-post-area">
                <div class="widget-title">
                    <h4>Najnowsze posty</h4>
                </div>
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <div class="sidebar-post-thumb">
                                <figure>
                                    <a href="#"><img src="{{ Storage::url($post->photo) }}" alt="image"></a>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <h6><a href="#">{{ $post->title }}</a></h6>
                                <span><i class="fa fa-calendar"></i> {{ $post->created_at->format('d M y') }} | <i class="fa fa-comment"></i>
2</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- / END RECENT POSTS DESIGN AREA -->

            <!-- START NEWSLETTER DESIGN AREA -->
            <div class="right-sidebar sidebar-search">
                <div class="widget-title">
                    <h4>NEWSLETTER</h4>
                </div>
                <form class="news-letter-form" novalidate>
                    <div class="sidebar-search-form">
                        <input required="" name="your_email" placeholder="Enter Your Email" type="text">
                        <input value="GO" class="search-btn" type="submit">
                        <p class="newsletter-success"></p>
                        <p class="newsletter-error"></p>
                    </div>
                </form>
            </div>
            <!-- / END NEWSLETTER DESIGN AREA -->

            <!-- START INSTAGRAM DESIGN AREA -->
            <div class="right-sidebar widget-instagram-area">
                <div class="widget-title">
                    <h4>INSTAGRAM</h4>
                </div>
                <ul class="sidebar-tags-list">
                    <li><figure><a href="#"><img src="{{ url('images/instagram/1.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                    <li><figure><a href="#"><img src="{{ url('images/instagram/2.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                    <li><figure><a href="#"><img src="{{ url('images/instagram/3.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                    <li><figure><a href="#"><img src="{{ url('images/instagram/4.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                    <li><figure><a href="#"><img src="{{ url('images/instagram/5.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                    <li><figure><a href="#"><img src="{{ url('images/instagram/6.jpg') }}" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                </ul>
            </div>
            <!-- / END INSTAGRAM DESIGN AREA -->

    <!-- / END SIDEBAR CONTENT DESIGN AREA -->


