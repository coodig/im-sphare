@extends('layouts.app')
@section('content')

    <h2 class="page-name">Home</h2>

    <div class="hero-section">
        <div class="hero-left">
            <h2 class="hero-content">Hi, I am <span class="name"
                    id="name">{{ ucwords(Auth::user()->profile->name ?? str_replace(['_', '@', '-'], ' ', Auth::user()->username)) }}</span>
            </h2>
            <p class="description">Full Stack Web Developer & UI/UX Designer</p>
            <div class="hero-section-action-buttons">
                {{-- <a href="#projects" class=" view-work" id="view-work">View Work</a> --}}
                <x-action-button url="{{ route('dashboard.show', ['username' => auth()->user()->username]) }}" type="view"
        label="View Work" id="view-work"/>
                {{-- <a href="#" class="contact-me" id="contact-me">Contact Me</a> --}}
                <x-action-button url="{{ route('dashboard.show', ['username' => auth()->user()->username]) }}" type="view"
        label="View Work" />
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-image">
                <img src="{{ asset('asset/img/logo.png') }}" alt="hero-image">
            </div>
        </div>
    </div>

    <div class="about-me-section">
        <div class="section-title">About Me</div>

        <div class="about-me-content">

            <div class="about-me-left">
                <div class="about-me-text">
                    <h3>WHO AM I?</h3>
                    <p>
                        Hello! I am a passionate Full Stack Web Developer. I love creating user-friendly designs and writing
                        clean, scalable code.
                        I have extensive experience working on various projects, including dynamic e-commerce sites and
                        business-ready applications.
                        <br><br>
                        Beyond web development, I am deeply interested in system-level programming. Currently, I am working
                        on a challenging project—<strong>creating my own programming language using C++</strong>—to
                        demonstrate my deep understanding of compilers and core computing concepts.
                    </p>
                </div>
            </div>

            <div class="about-me-right">
                <h3>I create modern digital solutions.</h3>
                <p>
                    My focus is on solving complex problems with efficient code. Whether it is a web application using
                    Laravel/React or a system-level project in C++, I aim for perfection.
                    I am currently seeking opportunities in top-tier MNCs where I can contribute my skills and grow as a
                    software engineer.
                </p>
                <p><strong>Name:</strong> {{ Auth::user()->username }}</p>
                <p><strong>Email:</strong> adarshsharma1350@gmail.com</p>
                <p><strong>Location:</strong> Lucknow, India</p>
                <p><strong>Experience:</strong> Web Development & System Programming</p>
            </div>

        </div>
    </div>

    <div class="skills-section">
        <div class="section-title">My Skills</div>
        <div class="skills-content">

            <div class="section-left">
                <h3>My Creative Skills & Experiences.</h3>
                <p>
                    I am a passionate Full Stack Developer with a strong interest in building scalable web applications.
                    I specialize in both Backend (PHP/Laravel) and Frontend (React/HTML/CSS) technologies.
                    My goal is to write clean, efficient code and create user-friendly designs that solve real-world
                    problems.
                </p>
                <p>
                    I have worked on various projects, including E-commerce platforms, Management Systems, and Custom Web
                    Solutions.
                    I am always eager to learn new technologies and improve my skills to deliver high-quality software.
                </p>
                {{-- <a href="#contact" class="hire-btn">Hire Me</a> --}}
                <x-action-button url="{{ route('dashboard.show', ['username' => auth()->user()->username]) }}" type="view"
        label="Hire Me" />
            </div>

            <x-card title="Total Revenue" icon="solar:wallet-money-bold-duotone">
    <h2 class="text-3xl font-bold text-primary">$45,200</h2>
    <p class="text-muted text-sm mt-1">+12% from last month</p>
</x-card><x-card title="Total Revenue" icon="solar:wallet-money-bold-duotone">
    <h2 class="text-3xl font-bold text-primary">$45,200</h2>
    <p class="text-muted text-sm mt-1">+12% from last month</p>
</x-card><x-card title="Total Revenue" icon="solar:wallet-money-bold-duotone">
    <h2 class="text-3xl font-bold text-primary">$45,200</h2>
    <p class="text-muted text-sm mt-1">+12% from last month</p>
</x-card>

            <div class="section-right">

                <div class="skill-bar">
                    <div class="info">
                        <span>HTML5 & CSS3</span>
                        <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <span>JavaScript / React JS</span>
                        <span>75%</span>
                    </div>
                    <div class="line js"></div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <span>PHP / Laravel</span>
                        <span>85%</span>
                    </div>
                    <div class="line php"></div>
                </div>

                <div class="skill-bar">
                    <div class="info">
                        <span>MySQL / Database Management</span>
                        <span>80%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="projects-section">
        <div class="section-title">My Projects</div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-img">
                    <img src="{{ asset('asset/img/logo.png') }}" alt="card-1">
                </div>
                <div class="project-info">
                    <h2 class="project-title">SMS</h2>
                    <p class="project-description">A full-featured online store with cart and payment gateway.</p>
                    <a href="#" class="project-link">View Details</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-img">
                    <img src="{{ asset('asset/img/about.jpg') }}" alt="card-2">
                </div>
                <div class="project-info">
                    <h2 class="project-title">SMS</h2>
                    <p class="project-description">A full-featured online store with cart and payment gateway.</p>
                    <a href="#" class="project-link">View Details</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-img">
                    <img src="{{ asset('asset/img/about.jpg') }}" alt="card-3">
                </div>
                <div class="project-info">
                    <h2 class="project-title">SMS</h2>
                    <p class="project-description">A full-featured online store with cart and payment gateway.</p>
                    <a href="#" class="project-link">View Details</a>
                </div>
            </div>

        </div>
    </div>


@endsection
