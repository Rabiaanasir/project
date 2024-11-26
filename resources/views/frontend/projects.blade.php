@extends('frontend.app')

@section('css')
@include('css.common_css')
@include('css.projects_css')
<style>
    .project-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }
</style>
@endsection

@section('content')
<header>
    <div class="header-content">
        <h2 class="lg-heading text-light ">OUR PROJECTS</h2>
    </div>
</header>
<div class="container py-5">
    <h2 class="text-center section-title">Projects Gallery</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($projects as $project)
            <div class="col">
                <div class="card h-100 project-card">
                    <div class="card-img-top">
                        <img
                            src="{{ asset('storage/images/' . $project->image) }}"
                            alt="{{ $project->title }}"
                        >
                        <div class="project-overlay">
                            {{ $project->title }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No projects available at the moment.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
