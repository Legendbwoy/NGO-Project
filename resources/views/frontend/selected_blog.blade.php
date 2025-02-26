@extends('frontend.layouts.main')

@section('title', $post->title)

@section('content')

    <style>
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
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}" class="text-white">Blog</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container mt-4">
        <div class="row">
            <!-- Main Blog Post -->
            <div class="col-lg-8 mb-4">
                <h1>{{ $post->title }}</h1>
                <p><small><i class="fa fa-calendar-alt"></i> Posted on {{ $post->created_at->format('F j, Y') }}</small></p>

                <!-- Display Blog Content -->
                <div class="post-body mb-4">
                    <p>{!! $post->content !!}</p>
                </div>

                <!-- Display Multiple Images in Grid Layout -->
                @if ($post->images && $post->images->count() > 0)
                    <div class="row mb-4">
                        @foreach ($post->images as $image)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{ asset($image->image) }}" class="card-img-top"
                                        alt="{{ $post->title }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No images available for this post.</p>
                @endif

                <!-- Comments Section -->
                <div class="comments-section">
                    <h4><i class="fa fa-comment"></i> Comments</h4>


                    <!-- Comment Form -->
                    <form method="POST" action="{{ route('comments.store', $post->id) }}" class="mb-4">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control bg-light border-0"
                                        id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control bg-light border-0"
                                        id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="comment" class="form-control bg-light border-0" id="comment" rows="4"
                                        placeholder="Add your comment..." required></textarea>
                                    <label for="comment">Your Comment</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5" style="height: 60px;">
                                    Post Comment
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Display Comments -->
                    <div class="comments-list mt-3">
                        @foreach ($post->comments as $comment)
                            <div class="comment mb-2 p-3 border rounded">
                                <p><strong>{{ $comment->name }}:</strong> {{ $comment->body }}</p>

                                <!-- Display Reply Form (if needed) -->
                                <div class="reply-form mt-3 collapse" id="replyForm{{ $comment->id }}">
                                    <form method="POST" action="{{ route('comments.store', $post->id) }}" class="mb-4">
                                        @csrf
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">

                                        <div class="form-group">
                                            <label for="replyName{{ $comment->id }}">Your Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="replyName{{ $comment->id }}" placeholder="Your name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="replyEmail{{ $comment->id }}">Your Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="replyEmail{{ $comment->id }}" placeholder="Your email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="replyMessage{{ $comment->id }}">Your Reply</label>
                                            <textarea name="message" class="form-control" id="replyMessage{{ $comment->id }}" rows="4"
                                                placeholder="Add your reply..." required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-2">Post Reply</button>
                                    </form>
                                </div>

                                <button class="btn btn-link btn-sm" onclick="toggleReplyForm({{ $comment->id }})">
                                    Reply
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar (Search, Recent Posts, Image Slider) -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="mb-4 p-3 border rounded">
                    <h4>Search</h4>
                    <form action="{{ route('blog.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="Search blog..."
                                value="{{ old('query') }}" required>
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


                <!-- Image Slider (Optional: Populate dynamically with post images) -->
                @if ($recentPosts->isNotEmpty())
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner">
                            @foreach ($recentPosts as $index => $recentPost)
                                @foreach ($recentPost->images as $imageIndex => $image)
                                    <div class="carousel-item {{ $index == 0 && $imageIndex == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($image->image) }}"
                                            class="d-block w-100" alt="{{ $recentPost->title }}">
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endif




            </div>
        </div>
    </div>

    <script>
        function toggleReplyForm(commentId) {
            var form = document.getElementById('replyForm' + commentId);
            form.classList.toggle('collapse');
        }
    </script>
@endsection
