@extends('frontend.layouts.main')
@section('title', 'Programs')

<style>
/* Set uniform height for all images */
.uniform-height {
    height: 250px; /* Adjust the height as needed */
    object-fit: cover; /* Ensures images fill the height, cropping excess */
    object-position: center; /* Keeps the image centered if cropped */
}

/* Hover effect for cards */
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Scale up and add shadow on hover */
.card-hover:hover {
    transform: translateY(-10px); /* Lifts the card up */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
}

/* Responsive Grid */
.row {
    display: flex;
    flex-wrap: wrap; /* Wraps items on larger screens */
    gap: 20px; /* Space between the cards */
}

.card {
    flex: 1 1 calc(33.333% - 20px); /* 3 cards per row on larger screens */
    margin-bottom: 20px;
    box-sizing: border-box;
}

/* Adjust card for small screens */
@media (max-width: 768px) {
    .card {
        flex: 1 1 100%; /* Full width for small screens */
    }
}

/* Ensure the page header is full height for vertical centering */
.page-header {
    height: 100vh; /* Full viewport height */
    display: flex;
    align-items: center; /* Vertically center the content */
    justify-content: center; /* Horizontally center the content */
}

/* Title styling */
.page-header h1 {
    text-align: center; /* Horizontal centering of the title */
    font-size: 3rem; /* Adjust the size of the title */
}
</style>

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Programs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Programs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
        <h2 class="text-center mb-4">Social Development Programme</h2>
        <p class="text-center mb-5">CIF’s social development programmes focus mainly on the following areas:</p>
    
        <div class="row">
            @foreach($programs as $program)
                <div class="card">
                    <div class="card h-100 card-hover">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $program->title }}</h5>
                            
                            <!-- Render the Program Description as HTML -->
                            <p class="card-text">
                                @if($program->description)
                                    {!! $program->description !!}
                                @else
                                    <span>No description available</span>
                                @endif
                            </p>
                            
                            <!-- Render Program Details as HTML (if any) -->
                            <div class="program-details">
                                @if($program->details)
                                    @php
                                        $details = json_decode($program->details); // Decode the JSON string into an array
                                    @endphp
                                    @if(is_array($details) && count($details) > 0)
                                        <ul>
                                            @foreach($details as $detail)
                                                <li>{!! $detail !!}</li> <!-- Render each detail as HTML -->
                                            @endforeach
                                        </ul>
                                    @else
                                        <span>No details available</span>
                                    @endif
                                @else
                                    <span>No details available</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
