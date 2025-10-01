@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="page-name">
            <h4>Gallery</h4>
        </div>
        {{-- <div class="edit-btn">
            <a href="{{route('gallery.edit',['username'=>Auth::user()->username])}}">Edit</a>
        </div> --}}

        <div class="header">
            <div class="header-left">
                <h3 class="gallery-heading">Profile Images</h3>
            </div>
            <div class="header-right">
                <button class="view-all-btn"><a href="#">
                        View All</a></button>
            </div>
        </div>
        <div class="profile-image-container">
            <div class="profile-image-cards">
                <div class="gallery-profile-banner">
                    <img src="{{asset('asset/img/about.jpg')}}" alt="">
                </div>
                <div class="card gallery-profile-icon">
                    <img src="{{asset('asset/img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-left">
                <h3 class="gallery-heading">Project Images</h3>
            </div>
            <div class="header-right">
                <button class="view-all-btn"><a href="#">
                        View All</a></button>
            </div>
        </div>

        <div class="profile-image-cards">
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="">
                {{-- <div class="overlay">
                    <div class="text">Hello World</div>
                </div> --}}
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="">
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="">
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="">
            </div>

        </div>

    </div>

@endsection
