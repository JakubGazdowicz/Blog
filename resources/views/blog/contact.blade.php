@extends('layouts.main')

@section('content')
    <!-- START HOMEPAGE DESIGN AREA -->
    <header class="single-blog-heading-area">
        <div class="single-blog-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>CONTACT ME</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <!-- START CONTACT DESIGN AREA -->
                <section id="contact" class="contact-area section-padding">
                    <div class="container">
                        <div class="row">
                            <!-- START CONTACT DETAILS DESIGN AREA -->
                            <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-contact-details text-center">
                                        <span class="lnr lnr-phone-handset"></span>
                                        <h4>phone</h4>
                                        <p class="text-muted">+1 111 222 3333</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-contact-details text-center">
                                        <span class="lnr lnr-envelope"></span>
                                        <h4>E-mail</h4>
                                        <p class="text-muted">support@dueza.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-contact-details text-center">
                                        <span class="lnr lnr-map-marker"></span>
                                        <h4>Address</h4>
                                        <p class="text-muted">New York, United States</p>
                                    </div>
                                </div>
                            </div>
                            <!-- / END CONTACT DETAILS DESIGN AREA -->
                        </div>
                        <div class="row contact-form-design-area wow fadeInUp">
                            <!-- START CONTACT FORM DESIGN AREA -->
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
                                        <form action="{{ route('sendMail') }}" method="get">
                                            @csrf
                                            <div class="form-group col-md-6">
                                                <p>Name</p>
                                                <input type="text" name="name" class="form-control" id="name" required="required">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <p>email</p>
                                                <input type="email" name="email" class="form-control" id="email" required="required">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>Subject</p>
                                                <input type="text" name="subject" class="form-control" id="subject" required="required">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p>message</p>
                                                <textarea rows="6" name="message" class="form-control" id="description" required="required"></textarea>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button>Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /END  CONTACT DETAILS DESIGN AREA -->
                        </div>
                    </div>
                </section>
                <!-- / END CONTACT DESIGN AREA -->
            </div>
        </div>
    </div>
    <!-- / END CONTACT DESIGN AREA -->
@endsection
