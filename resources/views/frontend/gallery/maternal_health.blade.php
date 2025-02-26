@extends('frontend.layouts.main')

@section('title')
    Gallery - Maternal Health
@endsection

@section('content')
<style>
    .text-block {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
    }

    .text-block h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center; /* Center the text */
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
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
    }

    .recent-post-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .recent-post-item img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 15px;
    }

    .recent-post-item .post-info {
        display: flex;
        flex-direction: column;
    }

    .recent-post-item .post-info h5 {
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .recent-post-item .post-info small {
        font-size: 0.875rem;
        color: #6c757d;
    }

    #carouselExampleControls .carousel-control-prev,
    #carouselExampleControls .carousel-control-next {
        display: none;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Maternal Health Gallery</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Content Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <!-- Main Gallery Content (Loop Through Maternal Health Entries) -->
<div class="col-lg-8">
    @foreach ($entries as $entry)
        <div class="text-block mb-4">
            <h3>{{ $entry->title }}</h3>
            <p>
                {!! $entry->content !!}
            </p>
        </div>

        <!-- Display Multiple Images in Grid Layout -->
        @if ($entry->images && $entry->images->count() > 0)
            <div class="row mb-4">
                @foreach ($entry->images as $image)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset($image->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $entry->title }}">
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No images available for this entry.</p>
        @endif
    @endforeach
</div>


            <!-- Sidebar with Search, Recent Posts, and Image Slider -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="mb-4">
                    <h4>Search</h4>
                    <form action="{{ route('gallery.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control"
                                placeholder="Search maternal health..." value="{{ request('query') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Recent Posts (from Blog) -->
                <div class="mb-4 p-3 border rounded">
                    <h4>Recent Posts</h4>
                    <ul class="list-unstyled">
                        @foreach ($recentPosts as $recentPost)
                            <li class="recent-post-item">
                                <!-- Post Image -->
                                <div>
                                    @if ($recentPost->images->isNotEmpty())
                                        <img src="{{ asset('upload/blog-images/' . $recentPost->images->first()->image) }}"
                                             class="img-fluid rounded" alt="{{ $recentPost->title }}">
                                    @else
                                        <img src="https://via.placeholder.com/50" class="img-fluid rounded"
                                             alt="No Image">
                                    @endif
                                </div>
                                <!-- Post Title and Date -->
                                <div class="post-info">
                                    <a href="{{ route('blog.show', $recentPost->slug) }}" class="text-decoration-none">
                                        <h5>{{ $recentPost->title }}</h5>
                                    </a>
                                    <small class="text-muted">{{ $recentPost->created_at->format('F j, Y') }}</small>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Carousel (Images from rollback malaria posts) -->
                @if ($entries->isNotEmpty())
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner">
                            @foreach ($entries->take(3) as $key => $carouselEntry)
                                <!-- Only display up to 3 posts -->
                                @foreach ($carouselEntry->images as $imageIndex => $image)
                                    <!-- Loop through all images -->
                                    <div class="carousel-item {{ $key === 0 && $imageIndex === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($image->image) }}"
                                            class="d-block w-100" alt="{{ $carouselEntry->title }}">
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->
@endsection
