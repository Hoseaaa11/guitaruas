@extends('layouts.app')

@section('content')

<section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                Buy Your Guitar
                            </p>
                            <h1 class="header">
                                Start Your <span class="text-purple">Love <br> Story</span> With Guitar
                            </h1>
                            <p class="support">
                                We are here to help you to find your guitar easily <br> find guitar that describe yourself
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Get Guitar
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/dashboarde.jpg')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{asset('images/baner.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>            

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        MORE GUITAR
                    </p>
                    <h2 class="primary-header text-white">
                        Find More Guitar
                    </h2>
                    <p class="support">
                        There is so many Guitar from all brands here <br> Find the best Guitar for yourself and start you love story
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            Find More
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="new text-center">
                                Gretsch G5420T
                                </p>
                                <h1 class="price text-center">
                                    $800K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Maple Wood
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Hollow Body
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    22 Frets
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Four Color
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Sixth Strings
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Single Cutaway
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>                            
                                    <a href="{{route('checkout.create', 'Gretsch')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Pick This Guitar
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="new text-center">
                                Yamaha SLG200S String
                                </p>
                                <h1 class="price text-center">
                                    $400K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Mahogany Wood
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Four Natural Color
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                    Silent String guitar
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>                            
                                <p>
                                    <a href="{{route('checkout.create', 'Yamaha')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                        First Buy
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{asset('images/brands.png')}}" height="30" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        RATINGS APP
                    </p>
                    <h2 class="primary-header">
                        We ARE GUITAR LOVERS
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    The guitar that i bought before have a good quality and the price not that expensive
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            Guitarist
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Guitar is a friend for us that searching for love
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angga
                                        </h4>
                                        <p class="role">
                                            Single Person
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    New customer i love how admin replies and the guitar have a great quality
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            Singer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright Laracamp BWA Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection