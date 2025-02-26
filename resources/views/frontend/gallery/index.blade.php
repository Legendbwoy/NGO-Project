@extends('frontend.layouts.main')

@section('title')
    Gallery - Roll Back Malaria
@endsection

@section('content')
<style>
    .text-block {
    background-color: #f9f9f9;  /* Light background for better readability */
    padding: 20px;
    border-radius: 8px;
}

.text-block h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.text-block p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}

.text-block ul {
    font-size: 16px;
    margin-left: 20px;
}

</style>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Roll Back Malaria Gallery</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Text Block Section for Roll Back Malaria Description -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="text-block">
                    <h3>Roll Back Malaria Initiative</h3>
                    <p>
                        Ghana committed itself to the Roll Back Malaria (RBM) initiative in 1999 and developed a strategic framework to guide its implementation. Overall, the Ghana RBM emphasizes the strengthening of health services through multi and inter-sector partnerships and making treatment and prevention strategies more widely available. The goal was to reduce malaria-specific morbidity and mortality by 50% by the year 2010. To achieve this, four main strategies were being pursued:
                    </p>
                    <ul>
                        <li>Promote multiple prevention, including treated bed nets usage, chemo prophylaxis in pregnancy, and environmental management.</li>
                        <li>Improve malaria case management at all levels (from household to health facility).</li>
                        <li>Encourage evidence-based research to come up with effective interventions.</li>
                        <li>Improve partnership with all partners at all levels.</li>
                    </ul>
                    <p>
                        Though Ghana has been making progress implementing its National Malaria Control Programme, there are still gaps in achieving the targets of the previous plan. Lessons learned from the implementation of the previous strategic plan have informed its current strategies.
                    </p>
                    <p>
                        Ghana is now implementing a malaria control programme with a goal to reduce death and illness due to malaria by 75% by the year 2015, in line with the attainment of the Millennium Development Goals (MDGs). This goal is to be achieved through overall health sector development, improved strategic investments in malaria control, and increased coverage towards universal access to malaria treatment and prevention interventions.
                    </p>
                    <p>
                        RBM is being launched at a time of growing investment in malaria, which still remains grossly underfunded. Unlike previous efforts, RBM is different by working not only through new tools for controlling the disease but also by involving and strengthening the health services to reach the affected population.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Text Block End -->

<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <!-- Gallery Images Section -->
            <div class="col-lg-8">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-4 mb-4">
                            <div class="gallery-item">
                                <!-- Display each image -->
                                <img src="{{ asset($image->image_path) }}" class="img-fluid" alt="{{ $image->title }}">
                                <h5 class="mt-2">{{ $image->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar with Search, Recent Posts, and Image Slider -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="mb-4">
                    <h4>Search</h4>
                    <form action="{{ route('blog.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Search post...">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Recent Posts -->
                <div class="mb-4">
                    <h4>Recent Posts</h4>
                    <ul class="list-unstyled">
                        @foreach($posts as $recentPost)
                            <li><a href="#">{{ $recentPost->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Image Slider -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($images->take(3) as $image) <!-- Display 3 featured images for the slider -->
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset($image->image_path) }}" class="d-block w-100" alt="{{ $image->title }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

@endsection