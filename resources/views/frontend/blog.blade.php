@extends('frontend.app')

@section('css')
    @include('css.common_css')
    @include('css.blog_css')
    <style>
        h1{
            color:navy;
            font-weight: 600;
            font-size: 50px;
        }
        .blog-post {
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin-bottom: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            transition: transform 0.2s ease-in-out;
            font-family: 'Montserrat', sans-serif;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-image {
            flex: 1;
            max-width: 300px;
            height: auto;
            overflow: hidden;
            border-radius: 8px;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .blog-content {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .blog-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .blog-post {
                flex-direction: column;
                text-align: center;
            }

            .blog-image {
                max-width: 100%;
                margin: 0 auto 15px;
            }
        }
    </style>
@endsection

@section('content')
<header>
    <div class="header-content">
        <h1>From the Blog</h1>
        <h2>Get Sun Source Solutions & never lose power day and night</h2>
    </div>
</header>

<div class="container mt-5">
    <h1 class="text-center mb-4">Blog Posts</h1>
    <div>
        <section class="row">
            <div class="imgewrapper">
        @foreach($blogPosts as $post)
            <div class="blog-post">
                <div class="blog-image">
                    @if($post->image)
                        <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder">
                    @endif
                </div>
                <div class="blog-content">
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <p class="blog-description">{{($post->description) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
</section>
@endsection
