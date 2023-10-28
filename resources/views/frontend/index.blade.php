@extends('layouts.frontend-template')
@section('content')
<x-slider />
<div class="site-section cta-big-image" id="about-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-10 col-sm-12 text-center">
                <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Petty Holding Plus</h2>
                <p class="lead text-justify" data-aos="fade-up" data-aos-delay="100">Welcome to the heart of petty cash flow management and expenses payment tracker
                    innovation where cutting-edge technology meets user-friendly design
                    to simplify our bill payment notification management for businesses operations. Petty Holding Plus is designed with a robust backend infrastructure and a commitment to
                    ease of use, that guarranty you to take control of your pending bills payments like never
                    before.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="">
                <figure class="circle-bg">
                    <img src="{{ asset('frontend/images/img_2.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black mb-4">PETTY HOLDING PLUS VISION</h3>
                <p class="text-justify">envision a world where payment management is a breeze for every
                    organization. Our mission is
                    to revolutionize the way
                    you track, manage, and optimize your payments, all while ensuring a seamless and delightful
                    user experience.</p>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black mb-4 text-uppercase">Financial Bill Payment Tracking</h3>
                <p>Say goodbye to manual tracking spreadsheets. With PETTY HOLDING PLUS, you can effortlessly track pending, paid, and part-paid payments, keeping your financial records up to date</p>
                <p>Behind the scenes, we harness the power of state-of-the-art technology to deliver a top-notch payment tracking solution.
                </p>
            </div>
        </div>
    </div>
</div>
<livewire:frontend.our-services></livewire:frontend.our-services>
@endsection
