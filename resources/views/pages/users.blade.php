@extends('layouts.master4')


@section('content')
{{-- First Section Videos --}}
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12 category-title">
                <h1 class="text-light">Users</h1>
                <p class="text-light link-nav"> <a href="{{Route('category.create')}}"
                        class="text-light btn primary-btn-category" style="visibility:hidden;">
                        Create Category</a>
                </p>
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
                    <h1 class="mb-10">All Users</h1>
                    <p>There is a moment in the life of any aspiring.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user['id']}}</th>
                            <td>{{$user['name']}}</td>
                            <td>
                            @foreach ($user['categories'] as $cat)
                            <ul>
                                <li>{{$cat['cat_en_name']}}</li>
                            </ul>

                            @endforeach
                          </td>
                        <td><a href="{{route('users.edit',$user['id'])}}" type="button" class="btn btn-primary"><i class="fas fa-user-edit"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center">
            {{$users->links()}}
        </div>
    </div> --}}
</section>
@endsection
