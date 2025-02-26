@extends('frontend.layouts.main')

@section('title')
    Blog
@endsection

@section('content')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <!-- Main Blog Content (Loop Through Multiple Posts) -->
                <div class="col-lg-8">
                    @foreach ($posts as $post)
                        <div class="blog-post mb-5">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <p><i class="fa fa-calendar-alt"></i> Posted on {{ $post->created_at->format('F j, Y') }}</p>
                            <!-- Display the First Image if it exists -->
                            @if ($post->images && $post->images->count() > 0)
                                <div class="post-image mb-3">
                                    <img src="{{ asset($post->images->first()->image) }}"
                                        class="img-fluid" alt="{{ $post->title }}" style="width: 100%; height: auto;">
                                </div>
                            @else
                                <p>No images available for this post.</p>
                            @endif

                            <p class="post-content">{!! Str::limit($post->content, 150) !!}</p>
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-primary">Read
                                More</a>
                            <hr>
                        </div>
                    @endforeach
                </div>

                <!-- Sidebar with Search, Recent Posts, and Image Slider -->
                <div class="col-lg-4">
                    <!-- Search Box -->
                    <div class="mb-4">
                        <h4>Search</h4>
                        <form action="{{ route('blog.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Search blog..."
                                    value="{{ request('query') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <!-- Recent Posts -->
                    <div class="mb-4 p-3 border rounded">
                        <h4>Recent Posts</h4>
                        <ul class="list-unstyled">
                            @foreach ($recentPosts as $recentPost)
                                <li class="recent-post-item">
                                    <!-- Post Image -->
                                    <div>
                                        @if ($recentPost->images->isNotEmpty())
                                            <img src="{{ asset($recentPost->images->first()->image) }}"
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

                    @if ($posts->isNotEmpty())
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="2000">
                            <div class="carousel-inner">
                                @foreach ($posts->take(3) as $key => $carouselPost)
                                    <!-- Only display up to 3 posts -->
                                    @foreach ($carouselPost->images as $imageIndex => $image)
                                        <!-- Loop through all images -->
                                        <div class="carousel-item {{ $key === 0 && $imageIndex === 0 ? 'active' : '' }}">
                                            <img src="{{ asset($image->image) }}"
                                                class="d-block w-100" alt="{{ $carouselPost->title }}">
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
    <!-- Blog End -->
@endsection
