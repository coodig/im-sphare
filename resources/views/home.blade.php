@extends('layouts.app')

@section('content')

    <div class="homepage-container">

        {{-- 1. Hero Section --}}
        <section class="hero-section">
            <div class="hero-content">
                @auth
                    <h1>Hi, I'm <span class="highlight">{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username)}}</span></h1>
                    <p class="tagline">{{ ucfirst(Auth::user()->profile->bio ?? '')}}</p>
                    <a href="https://github.com/coodig" target="_blank" class="btn btn-primary"><iconify-icon icon="streamline-freehand:collaboration-team-chat"></iconify-icon>Let's Collaborate</a>

                    @if (!$hasGitHubToken)
                    <a href="{{ route('github.form.show',['username',Auth::user()->username]) }}" class="btn btn-dark"><iconify-icon icon="fluent-emoji:key"></iconify-icon>Add GitHub Token</a>
                    @endif
                    @endauth

                    @guest
                    <h1>Hi, I'm <span class="highlight">___________</span></h1>
                    <p class="tagline">___________________ | ___________ | ________</p>
                    <a href="#" target="_blank" class="btn-primary"><iconify-icon icon="streamline-freehand:collaboration-team-chat"></iconify-icon> Let's Collaborate</a>
                    @endguest
                </div>
                {{-- @auth --}}
                <div class="hero-image">
                    <img src="{{ asset('asset/img/logo.png')}}">
                </div>
            </section>

            {{-- 2. About Section --}}
            <section class="about-section" id="about">
                <div class="section-header">
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

        {{-- 3. Skills Section --}}
        {{-- <section class="skills-section" id="skills">
            <div class="section-header">
                <iconify-icon icon="fluent-emoji-flat:brain" class="section-icon"></iconify-icon>
                <h2>&nbsp;Skills</h2>
            </div>
            <ul class="skills-list">
                <li>Laravel</li>
                <li>JavaScript</li>
                <li>Python</li>
                <li>Machine Learning</li>
                <li>React</li>
                <li>MySQL</li>
            </ul>
        </section> --}}

        {{-- 6. Contact Section --}}
        <section class="contact-section" id="contact">
            <div class="section-header">
                <iconify-icon icon="fxemoji:email" class="section-icon"></iconify-icon>
                <h2 class="section-title">&nbsp;Contact Me</h2>
            </div>
            <div class="contact-content">
                <div class="map-container">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6846.140932325604!2d80.87544765608858!3d26.769266762655167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bf9b7ccef66bd%3A0xadd6c2a91587fda3!2sMahindra%20Narain%20Automobiles%20-%20SUV%20%26%20Commercial%20Vehicle%20Showroom!5e1!3m2!1sen!2sin!4v1751170534426!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <div class="contact-form">

                    <h2>Contact Form</h2>
                    <form action="">
                        <div class="contact-form-items">
                            {{-- <label for="name">Your Name</label> --}}
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>

                            {{-- <label for="email">Your Email</label> --}}
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>

                            {{-- <label for="subject">Your Subject</label> --}}
                            <input type="text" name="subject" id="subject" placeholder="Subject of your message" required>

                            {{-- <label for="message">Your Message</label> --}}
                            <textarea name="message" id="message" placeholder="Write your message here..."
                                required></textarea>
                        </div>
                        <span><button type="submit" class="contact-form-items">Send Us</button></span>
                    </form>

                </div>
            </div>

        </section>

        {{-- 7. Footer --}}
        <footer class="site-footer">
            @auth
                <p>© {{ now()->year }}&nbsp;{{ ucwords(Auth::user()->username ?? Auth::user()->profile->name)}}. All rights reserved.</p>
            @endauth
            {{-- <div class="social-links"> --}}
                <div class="social-links">
                    {{-- @if($links->count()) --}}
                        <ul class="social-list">
                            {{-- @foreach($links as $link) --}}
                                <li class="social-item">
                                    {{-- <span class="platform-name">{{ ucfirst($link->plateform) }}</span> --}}
                                    {{-- <a class="url" href="{{ $link->social_url }}" target="_blank" rel="noopener"> --}}
                                        {{-- {{ $link->social_url }} --}}
                                    </a>
                                </li>
                            {{-- @endforeach --}}
                        </ul>
                    {{-- @else --}}
                        <p class="no-links">No social media links added yet.</p>
                    {{-- @endif --}}
                </div>

                {{--
            </div> --}}
        </footer>

    </div>

@endsection
