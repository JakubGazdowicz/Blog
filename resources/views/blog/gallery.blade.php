@extends('layouts.main')

@section('content')
    <!-- START HOMEPAGE DESIGN AREA -->
    <header class="single-blog-heading-area">
        <div class="single-blog-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START PHOTO GALLERY DESIGN AREA -->
    <section id="main-content" class="main-content-area">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="row">
                        <!-- START PHOTO GALLERY DESIGN AREA -->
                        <div class="col-md-8">
                            <!-- START WORK DESIGN AREA -->
                            <section id="gallery" class="work">
                                <div class="row">
                                    <ul class="work">
                                        <li class="filter active" data-filter="all">all</li>
                                        <li class="filter" data-filter=".sports">Sports</li>
                                        <li class="filter" data-filter=".lifestyle">Lifestyle</li>
                                        <li class="filter" data-filter=".recipesal">Recipesal</li>
                                        <li class="filter" data-filter=".fitness">Fitness</li>
                                    </ul>
                                </div>
                                <div class="work-content-inner-area">
                                    <div class="row work-posts">
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix sports fitness">
                                            <div class="item" data-wow-delay="0.2s">
                                                <figure><img src="{{ url('images/gallery/1.jpg') }}" class="img-responsive" alt="Picture"></figure>
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/1.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix lifestyle fitness">
                                            <div class="item wow fadeInUp" data-wow-delay="0.4s">
                                                <img src="{{ url('images/gallery/2.jpg') }}" alt="About te image">
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/2.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix recipesal lifestyle fitness">
                                            <div class="item wow fadeInUp" data-wow-delay="0.6s">
                                                <img src="{{ url('images/gallery/3.jpg') }}" alt="About te image">
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/3.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix lifestyle recipesal">
                                            <div class="item wow fadeInUp" data-wow-delay="0.8s">
                                                <img src="{{ url('images/gallery/4.jpg') }}" alt="About te image">
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/4.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix lifestyle fitness">
                                            <div class="item wow fadeInUp" data-wow-delay="1s">
                                                <img src="{{ url('images/gallery/5.jpg') }}" alt="About te image">
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/5.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                        <!-- START SINGLE WORK DESIGN AREA -->
                                        <div class="col-md-6 col-sm-6 mix sports lifestyle recipesal">
                                            <div class="item wow fadeInUp" data-wow-delay="1.2s">
                                                <img src="{{ url('images/gallery/6.jpg') }}" alt="About te image">
                                                <div class="tooltip">
                                                    <div class="align">
                                                        <a href="#"><i class="fa fa-link"></i></a>
                                                        <a href="{{ url('images/gallery/6.jpg') }}" class="work-popup"><i class="fa fa-search"></i></a>
                                                        <h3>Great Test<span>Party Time</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SINGLE WORK DESIGN AREA -->
                                    </div>
                                </div>
                            </section>
                            <!-- / END START WORK DESIGN AREA -->
                        </div>
                        <!-- / END PHOTO GALLERY DESIGN AREA -->

                        <!-- START SIDEBAR CONTENT DESIGN AREA -->
                        <div class="col-md-4 sidebar-area">
                            <div class="sidebar">
                                @include('sidebar')
                            </div>
                        </div>
                        <!-- / END SIDEBAR CONTENT DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END PHOTO GALLERY DESIGN AREA -->
@endsection
