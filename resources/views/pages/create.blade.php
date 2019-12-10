@extends('layouts.master4')

@section('content')
{{-- First Section Videos --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12 category-title">
                <h1 class="text-light create-category-title">Categories</h1>
                <p class="text-light link-nav"> <a href="{{Route('category')}}" class="text-light">Categories</a> <i
                        class="fas fa-arrow-right"></i> <a href="#" class="text-light"> Create Category</a></p>

            </div>
        </div>
    </div>
</section>

{{-- Second Section All Categories --}}
<section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Create category</h1>
                    <p>There is a moment in the life of any aspiring.</p>

                    <form action="{{Route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="cat_ar_name" id="cat_ar_name" class="form-control"
                                        placeholder="Category arabic Title" aria-label="Category arabic Title"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="cat_en_name" id="cat_en_name" class="form-control"
                                        placeholder="Category english Title" aria-label="Category english Title"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="cat_thumb" id="cat_thumb" aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label" for="cat_thumb">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button" id="inputGroupFileAddon04">Upload</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <button type="submit" class="btn btn-primary px-5">Create</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        @foreach ($videos as $video)


        <div class="single-popular-carusel col-lg-3 col-md-6">

            <div class="thumb-wrap relative">
                <div class="thumb relative">
                    <img class="img-fluid" src="{{asset('storage/coverImages/'.$video->thumbnail)}}" alt="">
    </div>
    </div>
    <div class="details">
        <h6>
            </p><a href="{{'/videos/'.$video->id}}">{{$video->vid_en_title}}</a></h6>
        <p>
            {{$video->vid_en_summary}}
        </p>
    </div>
    </div>

    @endforeach --}}
    </div>
</section>
@endsection
