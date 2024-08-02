@include('header')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('images/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to INNOVATION</h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">A Construction & Renovation Company</h1>
                                    <ol class="breadcrumb mb-4 pb-2">
                                        <li class="breadcrumb-item fs-5 text-light">Commercial</li>
                                        <li class="breadcrumb-item fs-5 text-light">Residential</li>
                                        <li class="breadcrumb-item fs-5 text-light">Industrial</li>
                                    </ol>
                                    <a href="{{ route('help') }}" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('images/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to INNOVATION</h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">Professional Tiling & Painting Services</h1>
                                    <ol class="breadcrumb mb-4 pb-2">
                                        <li class="breadcrumb-item fs-5 text-light">Commercial</li>
                                        <li class="breadcrumb-item fs-5 text-light">Residential</li>
                                        <li class="breadcrumb-item fs-5 text-light">Industrial</li>
                                    </ol>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                        <h1 class="display-6 mb-0">Our Specialization And Company Features</h1>
                    </div>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Large number of services provided</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">5+ years of professional experience</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">A large number of grateful customers</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Always reliable and affordable prices</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('images/feature.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">5</h1>
                                <h2 class="text-white">Years</h2>
                                <h5 class="text-white mb-0">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('images/fact-1.jpg') }}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Construction</h4>
                        <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('images/fact-2.jpg') }}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Mechanical</h4>
                        <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('images/fact-3.jpg') }}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Architecture</h4>
                        <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('images/fact-4.jpg') }}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">Interior Design</h4>
                        <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Services</h6>
                        <h1 class="display-6 mb-0">Construction And Renovation Solutions</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-1.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Building Construction</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-2.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Home Maintainance</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-3.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Renovation and Painting</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-4.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Wiring and installation</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-5.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tiling and Painting</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('images/service-6.jpg') }}" alt="">
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Interior Design</h5>
                            <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                            <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    @include('footer')