@extends('frontend.layouts.main')

@section('title', 'About Us')

@section('content')

    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* Image container styling */
        .image-box {
            position: relative;
            width: 100%;
            height: 400px;  /* Increase height of the images */
            overflow: hidden;
            margin-bottom: 30px; /* Space between images vertically */
        }

        .image-box img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 8px; /* Optional: Add rounded corners to images */
        }

        /* Ensure images are stacked vertically */
        .image-section {
            display: block; /* Make the container block-level to stack images */
        }

        /* Adjust for responsive design */
        @media (max-width: 768px) {
            .image-box {
                height: 300px; /* Reduce image height on smaller screens */
            }
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Image Section Start -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 500px;">
                        <!-- Image Box Loop -->
                        <div class="image-section">
                            @foreach (['image1', 'image2', 'image3', 'image4'] as $image)
                                @if ($aboutUs && $aboutUs->$image)
                                    <div class="image-box">
                                        <img src="{{ asset($aboutUs->$image) }}" alt="Image" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Image Section End -->

                <!-- Content Section Start -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-4 rounded">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">{{ $aboutUs ? $aboutUs->title : 'About Us' }}</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                {{ $aboutUs ? $aboutUs->short_description : 'No description available' }}
                            </p>
                            <span class="text-primary">CIFGH</span>
                        </div>

                        <!-- Full Description (HTML) -->
                        <p class="mb-5">
                            {!! $aboutUs ? $aboutUs->full_description : 'No full description available' !!}
                        </p>

                        <!-- Vision -->
                        <h3>Vision</h3>
                        <p class="mb-5">
                            {!! $aboutUs ? $aboutUs->vision : 'No vision available' !!}
                        </p>

                        <!-- Mission -->
                        <h3>Mission</h3>
                        <p class="mb-5">
                            {!! $aboutUs ? $aboutUs->mission : 'No mission available' !!}
                        </p>

                        <!-- Achievements -->
                        <h3>Achievements</h3>
                        <p class="mb-5">
                            {!! $aboutUs ? $aboutUs->achievements : 'No achievements available' !!}
                        </p>

                        <!-- Programs -->
                        <h3>Programs</h3>
                        <p class="mb-5">
                            {!! nl2br(e($aboutUs ? $aboutUs->programs : 'No programs available')) !!}
                        </p>

                        <a class="btn btn-primary py-2 px-3 me-3" href="{{ route('about') }}">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="{{ route('contact') }}">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Content Section End -->
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
