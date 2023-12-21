@extends('layouts.home')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Membership Registeration</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="">Membership Registeration</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <div class="section-header mt-5">
        <h3>Become a Luxcierge Member</h3>
            </div>
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container mb-5 mt-5">


                <div class="row gy-4 mt-5 mb-5">

                    <div class="col-lg-5 d-flex align-items-center justify-content-center">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('home_assets/assets/img/shutterstock_630548282.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('home_assets/assets/img/shutterstock_630548282.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portfolio-info">
                            <h2>Membership Registration</h2>
                            <div class="form">
                                <form action="{{ route('membership') }}" method="POST">
                                    @csrf
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Firstname</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Firstname</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="col-form-label" for="phone">Phone</label>
                                        <div class="input-group">
                                            {{-- <div class="input-group-prepend">
                                                <span class="input-group-text">+84</span>
                                            </div> --}}
                                            <input type="number" min="0" class="form-control" name="phone"
                                                placeholder="...">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="birthday">Birthday</label>
                                        <input type="date" class="form-control" name="birthday">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" name="company">
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-md-6">
                                            <label for="gender">Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="country">Country</label>
                                            <select name="country" id="" class="form-control">
                                                <option value="">Vietnam</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group mt-3">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="" class="form-control" rows="2"></textarea>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="address">How did you hear about us</label>
                                        <textarea name="address" id="" class="form-control" rows="2"></textarea>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="address">Let us know how to help you</label>
                                        <textarea name="address" id="" class="form-control" rows="4"></textarea>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-warning rounded-pill w-100">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->



    </main><!-- End #main -->
@endsection
