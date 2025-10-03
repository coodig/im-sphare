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
                <button class="view-all-btn"><a href="{{route('gallery.show',['username'=>Auth::user()->username])}}">
                        View All</a></button>
            </div>
        </div>
        <div class="profile-image-container">
            <div class="profile-image-cards">
                <div class="gallery-profile-banner">
                    <img src="{{asset('asset/img/profile-banner.jpeg')}}" alt="" class="gallery-image">
                </div>
                <div class="card gallery-profile-icon">
                    <img src="{{asset('asset/icons/imsphare-icon.png')}}" alt="" class="gallery-image">
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-left">
                <h3 class="gallery-heading">Project Images</h3>
            </div>
            <div class="header-right">
                <button class="view-all-btn"><a href="{{route('gallery.show',['username'=>Auth::user()->username])}}">
                        View All</a></button>
            </div>
        </div>

        <div class="profile-image-cards">
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/profile-banner.jpeg')}}" alt="" class="gallery-image">
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
            </div>
            <div class="gallery-profile-banner">
                <img src="{{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
            </div>

        </div>

    </div>

    <div class="modal" id="image-modal">
        {{-- <div class="modal-header">
            <span class="image-name">this name</span>
        </div> --}}
            <span class="close-modal"><iconify-icon icon="solar:close-square-bold-duotone" class="close-modal-icon"></iconify-icon></span>
        <div class="modal-content">

            <div class="modal-content-left" id="modal-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
            </div>
            <div class="modal-content-right">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
               <img src="{{asset('asset/img/profile-banner.jpeg')}}" alt="" class="gallery-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">
                <img src=" {{asset('asset/img/about.jpg')}}" alt="" class="gallery-image">

            </div>
        </div>
    </div>

@endsection
