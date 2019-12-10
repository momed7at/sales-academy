@extends('layouts.master4')


@section('content')
{{-- First Section Videos --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12 category-title">
                <h1 class="text-light">Categories</h1>
                @if ($var2==1)
                <p class="text-light link-nav"> <a href="{{Route('category.create')}}" class="text-light btn primary-btn-category">Create Category</a></p>
                @else
                <p class="text-light link-nav"> <a href="#all_category" class="text-light btn primary-btn-category" style="visibility:hidden;">See more</a></p>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- Second Section All Categories --}}
<section class="popular-courses-area section-gap courses-page" id="all_category">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">All Categories</h1>
                    <p>There is a moment in the life of any aspiring.</p>
                </div>
            </div>
        </div>

    <div class="row">
        @foreach ($categories as $category)


        <div class="single-popular-carusel col-lg-3 col-md-6">

            <div class="thumb-wrap relative">
                <div class="thumb relative">
                <div class="card mx-2" style="width: 17rem;">
                    <img class="card-img-top img-fluid " src="{{asset('storage/cat_thumb/'.$category->cat_thumb)}}" alt="">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
<div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$categories->links()}}
        </div>
    </div>
</section>
@endsection
