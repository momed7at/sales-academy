@extends('layouts.master4')

@section('content')
{{-- First Section Videos --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12 category-title">
                <h1 class="text-light create-category-title">Categories</h1>
                <p class="text-light link-nav"> <a href="{{Route('users.index')}}" class="text-light">Users</a> <i
                        class="fas fa-arrow-right"></i> <a href="#" class="text-light"> Edit Category</a></p>

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
                    <h1 class="mb-10">Edit category</h1>

                    <form action="{{Route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group mt-5">
                                <div class="custom-file">
                                    <select  multiple="multiple" name="cat[]" id="" class="form-control">
                                         @foreach ($categories  as $cat)
                                    <option value="{{$cat['id']}}" {{$user->hasCategory($cat['id'])? 'selected': ''}}>{{$cat['cat_en_name']}}</option>
                                        @endforeach
                                    </select>
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
