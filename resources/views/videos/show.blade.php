
@extends('layouts.master4')


@section('content')
{{-- First Section Videos --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-light">
                   <a href="#" class="text-light">Videos</a>
                </h1>
                <p class="text-light link-nav"> <a href="{{Route('home')}}" class="text-light">Home</a>  <i class="fas fa-arrow-right"></i> <a  href="{{Route('videos.index')}}" class="text-light"> Popular videos</a></p>
            </div>
        </div>
    </div>
</section>

{{-- Second section Video --}}
<section class="course-details-area pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-contents">
                    <div class="main-image">
                            <video width="700" height="400" controls>
                                    <source src="{{asset('storage/vid_location/'.$video->vid_location)}}" type="video/mp4">
                                    <source src="{{asset('storage/vid_location/'.$video->vid_location)}}" type="video/ogg">
                            </video>
                    </div>
                    <h5>{{$video->vid_en_title}}</h5>
                    <p class="text-muted small">Last Updated <span>{{$video->updated_at}}</span></p>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                            </li>
                          </ul>

                    <div class="jq-tab-wrapper horizontal-tab" id="horizontalTab">
                        <div class="tab-content" id="myTabContent">


                        <div class="jq-tab-content-wrapper">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
                            <div class="jq-tab-content active" data-tab="1">
                              {{$video->vid_en_description}}
                            </div>


                        </div>

                    </div>
                </div>
                    </div>
                </div>
                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>{{$video->vid_en_summary}} </p>
                            </a>
                        </li>
                        </ul>
                <a href="{{Route('download.script',$video->script)}}" class="primary-btn text-uppercase ">Download Files</a>
                {{-- <a href="{{ route('books.download', $book->id) }}" class="btn btn-outline-warning">Download Cover</a> --}}
            </div>
            </div>
        </div>
    </section>
@endsection
