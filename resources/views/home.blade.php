@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="page-name">
            <h4>Home</h4>
        </div>

        {{-- <div class="home-header">
            <span class="user-site-name">{{ ucwords(str_replace(['-', '_'], ' ', Auth::user()->username))  }}</span>
            <span class="share-btn">
                <a href="#" target="_blank" class="btn btn-primary"><iconify-icon
                        icon="flowbite:share-all-solid"></iconify-icon>Share</a>
            </span>
        </div>
        <section class="hero-section">
            <div class="hero-content">

                <h1>Hi, I'm <span
                        class="highlight">{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username)}}</span></h1>
                <p class="tagline">{{ ucfirst(Auth::user()->profile->bio ?? '')}}</p>

                <div class="hero-section-actions">

                    <a href="https://github.com/coodig" target="_blank" class="btn btn-primary"><iconify-icon
                            icon="streamline-freehand:collaboration-team-chat"></iconify-icon>Let's Collaborate</a>
                    <a href="mailto:{{ Auth::user()->email }}" class="btn btn-primary">
                        <iconify-icon icon="streamline-plump:bag-suitcase-4-solid"></iconify-icon>
                        Hire Me
                    </a>
                    @auth

                        @if (!$hasGitHubToken)
                            <a href="{{ route('github.form.show', ['username', Auth::user()->username]) }}"
                                class="btn btn-primary"><iconify-icon icon="fluent-emoji:key"></iconify-icon>Add GitHub Token</a>
                        @endif
                    @endauth
                </div>

            </div>
            <div class="hero-image">
                <img src="{{ asset('asset/img/logo.png')}}">
            </div>
        </section>

        <section class="about-section" id="about">
            <div class="section-header align-center">
                <iconify-icon icon="fluent-emoji-flat:waving-hand" class="section-icon"></iconify-icon>
                <h2 class="section-title">&nbsp;About Me</h2>
            </div>

            @if($user_about)
                <div class="page-header">
                    <p>{{ ucfirst($user_about->description) }}</p>
                </div>

                <div class="about-content">
                    <div class="about-text">
                        <p>{{ ucfirst($user_about->content) }}</p>
                    </div>
                    <div class="about-img">
                        <img src="{{ Storage::url($user_about->image) }}" alt="About Image">
                    </div>
                </div>
            @else
                <p style="text-align: center">No About Me content available.</p>
            @endif
        </section>

        <footer class="site-footer">
            @auth
                <p>© {{ now()->year }}&nbsp;{{    ucwords(Auth::user()->username ?? Auth::user()->profile->name)}}. All rights
                    reserved.</p>
            @endauth
            <div class="social-links">
                <ul class="social-list">
                    <li class="social-item">
                        </a>
                    </li>
                </ul>
                <p class="no-links">No social media links added yet.</p>
            </div>

        </footer> --}}

    </div>

@endsection
