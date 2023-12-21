@extends('layouts.home')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="">About</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->
        <div class="section-header mt-5">
        <h3>About Luxcierge</h3>
            </div>
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container mb-5 mt-5">
                <div class="row gy-4 mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="portfolio-description">
                            <h1>Welcome to Luxcierge Nigeria</h1>
                            <p>Where luxury meets unparalleled concierge services, setting the standard for the most
                                discerning travelers. As the epitome of refined hospitality, we meticulously curate a
                                harmonious blend of practicality and opulence to redefine your travel experience. <br><br>
                                At Luxcierge Nigeria, our commitment is to exceed expectations. Our suite of services is
                                thoughtfully designed to cater to every need and desire, ensuring a seamless journey from
                                start to finish. Whether you seek exclusive travel arrangements, bespoke experiences, or
                                meticulous attention to detail, we are here to transform your vision into a reality.
                                <br><br>
                                Indulge in a world where luxury knows no bounds, and every moment is an experience worth
                                savoring. Luxcierge Nigeria – where sophistication meets service, and your journey is
                                crafted with unparalleled elegance.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('home_assets/assets/img/7d995bab44ed62f59a4feb948f030664-e1701044639356.jpg') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>





                <div class="row gy-4 mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="portfolio-info">
                            <h2>How We Operate</h2>
                            <p>
                                At Luxcierge, our approach seamlessly marries the dedicated touch of a personal lifestyle manager with an extensive global network, ensuring efficiency, individuality, and comprehensive service.
                            </p>


                            <h3 class="mt-3">Committed lifestyle managers</h3>
                            <p>Our lifestyle managers provide a personal point of contact to fulfil each and every request. An intimate understanding of personality and preference serves as the conduit for a life lived to the fullest.</p>


                            <h3 class="mt-3">Discover more about what we do </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('home_assets/assets/img/pexels-karolina-grabowska-4467682-1365x2048.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('home_assets/assets/img/pexels-sarah-chai-7267385-1365x2048.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->



    </main><!-- End #main -->
@endsection
