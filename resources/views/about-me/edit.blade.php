@extends('layouts.app')

@section('content')

    {{-- <div class="page about-page"> --}}
        <div class="about-container">

            <form action="{{ route('about-me.update', ['username' => Auth::user()->username]) }}" method="POST"
                enctype="multipart/form-data" class="about-edit-form">
                @csrf
                {{-- @method('PUT') --}}
                <div class="page-header">
                    <div class="page-title"><input type="text" id="about_title" name="about_title"
                            value="{{ old('title', $user_about->title) }}" class="form-control" required></div>
                    <div class="form-group">
                        <input type="text" id="about_description" name="about_description"
                            value="{{ old('description', $user_about->description) }}" class="form-control">
                    </div>
                </div>

                <div class="about-content">
                    <div class="about-text">
                        <div class="form-group">
                            <textarea id="about_content" name="about_content" class="form-control"
                                rows="5">{{ old('content', $user_about->content) }}</textarea>
                        </div>

                        {{-- <ul class="about-features">
                            <li><iconify-icon icon="streamline-sharp:slide-show-play-solid"
                                    class="feature-icon"></iconify-icon>
                                <span>Showcase your skills, experiences, and projects effectively.</span>
                            </li>
                            <li><iconify-icon icon="gis:globe-users" class="feature-icon"></iconify-icon>
                                <span>Empower users from all backgrounds developers, designers, writers, and more.</span>
                            </li>
                            <li><iconify-icon icon="vaadin:tools" class="feature-icon"></iconify-icon>
                                <span>Simple interface with powerful tools for creative freedom.</span>
                            </li>
                            <li><iconify-icon icon="streamline-flex:decent-work-and-economic-growth-remix"
                                    class="feature-icon"></iconify-icon>
                                <span>Built for both personal branding and professional growth.</span>
                            </li> --}}

                            {{-- <li>🧠 <span>Empower users from all backgrounds — developers, designers, writers, and
                                    more.</span></li>
                            <li>⚡ <span>Simple interface with powerful tools for creative freedom.</span></li>
                            <li>🛠️ <span>Built for both personal branding and professional growth.</span></li> --}}
                            {{--
                        </ul> --}}
                    </div>
                    <div class="form-group">
                        <label for="image">Profile Image</label><br>
                        <img src="{{ Auth::user()->userabout && Auth::user()->userabout->image
        ? asset('storage/about/' . Auth::user()->userabout->image)
        : asset('images/default.png') }}">
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>

@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </div>
@endsection
