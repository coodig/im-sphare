@extends('layouts.app')

@section('content')

    {{-- <div class="page about-page"> --}}
        <div class="about-container">

            <a class="about-user-edit" id="about-user-edit"
                href="{{ route('about_me.edit', ['username' => Auth::user()->username]) }}">
                Edit
            </a>


            <div class="page-header">
                <div class="page-title">{{ ucfirst(Auth::user()->userabout->title ?? 'About') }}</div>
                <div class="page-description">{{ucfirst(Auth::user()->userabout->description ?? 'not available')}}</div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <p>
                        {{ ucfirst(Auth::user()->userabout->content ?? 'not available')}}
                    </p>
                </div>
                <div class="about-img">
                    {{-- <img src="{{asset('storage/'.Auth::user()->userabout->image)}}" alt="this image"> --}}
                    {{-- @dd(Auth::user()->userabout->image) --}}
                    <img src="{{Storage::url(Auth::user()->userabout->image ?? 'no image')}}" alt="this image">
                </div>
                {{-- <div class="about-footer">
                    <p>Join us today and start building your standout online presence!</p>
                </div> --}}
            </div>

            {{--
        </div> --}}

    </div>
@endsection
