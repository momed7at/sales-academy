@extends('layouts.master4')

@section('content')
<section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12 category-title">
                    <h1 class="text-light create-category-title">Upload new Video</h1>
                    <p class="text-light link-nav"> <a href="{{Route('users.index')}}" class="text-light">Users</a> <i
                            class="fas fa-arrow-right"></i> <a href="#" class="text-light"> Edit Category</a></p>

                </div>
            </div>
        </div>
    </section>
    {{-- Second Section All Categories --}}
<section class="popular-courses-area section-gap courses-page">
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        <form action="{{Route('videos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                        <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="vid_location" class="custom-file-input" id="vid_location" aria-describedby="vid_location">
                                    <label class="custom-file-label" for="vid_location">Upload Video</label>
                                </div>
                                </div>
                </div>
                <div class="col-md-6">
                        <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail" aria-describedby="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Upload thumbnail</label>
                                </div>
                                </div>
                </div>
            </div>


            <div class="form-group">
                <label for="vid_ar_title">Arabic Title</label>
                <input type="text" class="form-control" name="vid_ar_title" id="vid_ar_title" >
            </div>
            <div class="form-group">
                <label for="vid_en_title">English Title</label>
                <input type="text" class="form-control" name="vid_en_title" id="vid_en_title" >
            </div>
            <div class="form-group">
                <label for="vid_ar_summary">Arabic Summary</label>
                <textarea  class="form-control" name="vid_ar_summary" id="vid_ar_summary" cols="30" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="vid_en_summary">English Summary</label>
                <textarea  class="form-control" name="vid_en_summary" id="vid_en_summary" cols="30" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="vid_ar_description">Arabic description</label>
                <textarea  class="form-control" name="vid_ar_description" id="vid_ar_description" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="vid_en_description">English description</label>
                <textarea  class="form-control" name="vid_en_description" id="vid_en_description" cols="30" rows="4"></textarea>
            </div>
                <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="script" class="custom-file-input" id="script" aria-describedby="script">
                    <label class="custom-file-label" for="script">Upload Video Script</label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</div>
</section>
@endsection
