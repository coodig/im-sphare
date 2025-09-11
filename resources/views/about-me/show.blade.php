@extends('layouts.app')

@section('content')

        <div class="about-container">

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
                    <img src="{{Storage::url(Auth::user()->userabout->image ?? 'no image')}}" alt="this image">
                </div>
            </div>

    </div>
@endsection
