@extends('layouts.app')

@section('content')

    <div class="homepage-container">

        {{-- 1. Hero Section --}}
        <section class="hero-section">
            <div class="hero-content">
                @auth
                    <h1>Hi, I'm <span class="highlight">{{ ucwords(Auth::user()->name)}}</span></h1>
                    <p class="tagline">Computer Science Student | AI Enthusiast | Laravel Developer</p>
                    <a href="https://github.com/coodig" target="_blank" class="btn-primary">📩 Let's Collaborate</a>
                     <a href="{{ route('github.form.show')}}" target="_blank" class="btn-primary">Add GitHub token</a>
                @endauth

                @guest
                    <h1>Hi, I'm <span class="highlight">___________</span></h1>
                    <p class="tagline">___________________ | ___________ | ________</p>
                    <a href="#" target="_blank" class="btn-primary">📩 Let's Collaborate</a>
                @endguest
            </div>

            <div class="hero-image">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Adarsh Photo">
            </div>
        </section>

        {{-- 2. About Section --}}
        <section class="about-section" id="about">
            <div class="section-header">
                <iconify-icon icon="fluent-emoji-flat:waving-hand" class="section-icon"></iconify-icon>
                <h2 class="section-title">&nbsp;About Me</h2>
            </div>
            <p>I’m a passionate developer building AI-integrated apps, gesture-controlled tech, and Laravel-powered systems.
                I love solving real-world problems with code.</p>
        </section>

        {{-- 3. Skills Section --}}
        <section class="skills-section" id="skills">
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
        </section>


        {{-- 4. Projects Section --}}
        <section class="projects-section" id="projects">
            <div class="section-header">
                <iconify-icon icon="fluent-emoji-flat:rocket" class="section-icon"></iconify-icon>
                <h2 class="section-title">&nbsp;Projects</h2>
            </div>
            <div class="project-cards">
                {{-- @foreach($repos->take(4) as $repo) --}}
                <div class="project-card">
                    <h3>project-title</h3>
                    {{-- <h3>{{ $repo->title }}</h3> --}}
                    <p>description, 120</p>
                    <a href="#" class="btn-secondary">View Details</a>
                    {{-- <p>{{ Str::limit($project->description, 120) }}</p>
                    <a href="{{ route('project.show', $project->id) }}" class="btn-secondary">View Details</a> --}}
                    <a href="#" class="btn-secondary">View Details</a>
                </div>
                <div class="project-card">
                    <h3>project-title</h3>
                    {{-- <h3>{{ $repo->title }}</h3> --}}
                    <p>description, 120</p>
                    <a href="#" class="btn-secondary">View Details</a>
                    {{-- <p>{{ Str::limit($project->description, 120) }}</p>
                    <a href="{{ route('project.show', $project->id) }}" class="btn-secondary">View Details</a> --}}
                    <a href="#" class="btn-secondary">View Details</a>
                </div>

                {{-- @endforeach --}}
            </div>
        </section>

        {{-- 5. GitHub Repos --}}
        <section class="github-section">
            <div class="section-header">
                <iconify-icon icon="fluent-emoji-flat:package" class="section-icon"></iconify-icon>
                <h2 class="section-title">&nbsp;GitHub Repositories</h2>
            </div>
            <div class="repo-cards">
                {{-- @foreach($repos as $repo) --}}
                <div class="repo-card">
                    <h4>repo name</h4>
                    <p>description</p>
                    <a href="#" target="_blank">Visit Repo</a>

                    {{-- <h4>{{ $repo['name'] }}</h4> --}}
                    {{-- <p>{{ $repo['description'] ?? 'No description available.' }}</p> --}}
                    {{-- <a href="{{ $repo['html_url'] }}" target="_blank">Visit Repo</a> --}}
                </div>
                <div class="repo-card">
                    <h4>repo name</h4>
                    <p>description</p>
                    <a href="#" target="_blank">Visit Repo</a>

                    {{-- <h4>{{ $repo['name'] }}</h4> --}}
                    {{-- <p>{{ $repo['description'] ?? 'No description available.' }}</p> --}}
                    {{-- <a href="{{ $repo['html_url'] }}" target="_blank">Visit Repo</a> --}}
                </div>
                {{-- @endforeach --}}
            </div>
        </section>

        {{-- 6. Contact Section --}}
        <section class="contact-section" id="contact">
            <div class="section-header">
                <iconify-icon icon="fxemoji:email" class="section-icon"></iconify-icon>   <h2 class="section-title">&nbsp;Contact Me</h2>
            </div>
            <form action="#" method="POST" class="contact-form">
                {{-- <form action="{{ route('contact.send') }}" method="POST" class="contact-form"> --}}
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Write your message..." required></textarea>
                    <button type="submit">Send Message</button>
                </form>
        </section>

        {{-- 7. Footer --}}
        <footer class="site-footer">
            <p>© {{ now()->year }} Adarsh Sharma. All rights reserved.</p>
            <div class="social-links">
                <a href="#">GitHub</a>
                <a href="#">LinkedIn</a>
                <a href="#">Portfolio</a>
            </div>
        </footer>

    </div>

@endsection
