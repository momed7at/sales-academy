@extends('layouts.master4')


@section('content')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12 category-title">
                <h1 class="text-white">
                    Popular Courses
                </h1>
                @if ($var==1)
                <p class="text-light link-nav"> <a href="{{Route('videos.create')}}" class="text-light btn primary-btn-category">Create
                        Video</a></p>
                        @else
                        <p class="text-light link-nav"> <a href="#all_video" class="text-light btn primary-btn-category">All
                                Videos</a></p>
                        @endif
                                </div>
        </div>
    </div>
</section>
{{-- Second Section Videos --}}
<section class="popular-courses-area section-gap courses-page" id="all_video">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Courses we offer</h1>
                    <p>There is a moment in the life of any aspiring.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($videos as $video)


            <div class="single-popular-carusel col-lg-3 col-md-6">

                <div class="thumb-wrap relative">
                    <div class="thumb relative">
                        <img class="img-fluid" src="{{asset('storage/coverImages/'.$video->thumbnail)}}" alt="">
                    </div>
                </div>
                <div class="details">
                    <h6></p><a href="{{'/videos/'.$video->id}}">{{$video->vid_en_title}}</a></h6>
                    <p>
                            {{$video->vid_en_summary}}
                    </p>
                </div>
            </div>

            @endforeach
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                {{$videos->links()}}
            </div>
        </div>
</section>

{{-- @foreach ($categories as $video)


<video width="700" height="400" controls>
    <source src="{{asset('storage/vid_location/'.$video->vid_location)}}" type="video/mp4">
    <source src="{{asset('storage/vid_location/'.$video->vid_location)}}" type="video/ogg">
  </video>
<img src="{{asset('storage/coverImages/'.$video->thumbnail)}}" alt="" width="700" height="400">

@endforeach --}}

@endsection
