@extends('layouts.master2')

@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between" style="height: 642px;">
            <div class="banner-content col-lg-9 col-md-12">
                <h1 class="text-uppercase">
                    We Ensure better education
                    for a better world
                </h1>
                <p class="pt-10 pb-10">
                    In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
                </p>
                <a href="{{ route('videos.index') }}" class="primary-btn text-uppercase">VIEW COURSES</a>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
