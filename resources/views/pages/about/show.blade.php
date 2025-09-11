@extends('layouts.app')

@section('content')

    {{-- <div class="page about-page"> --}}
        <div class="about-container">

            <div class="page-header">
                <div class="page-title">About</div>
                <div class="page-description">A simple and smart way to showcase your skills and achievements.</div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <p>
                        Welcome to <strong>IMSphare</strong>, A platform built to empower individuals from all
                        backgrounds to build, manage, and share professional portfolios with ease.
                        Whether you're a developer, designer, writer, student, or freelancer, our goal is to give you
                        complete creative control without needing to write a single line of code.
                    </p>

                    <ul class="about-features">
                        <li><iconify-icon icon="streamline-sharp:slide-show-play-solid" class="feature-icon"></iconify-icon>
                            <span>Showcase your skills, experiences, and projects effectively.</span>
                        </li>
                        <li><iconify-icon icon="gis:globe-users" class="feature-icon"></iconify-icon>
                            <span>Empower users from all backgrounds developers, designers, writers, and more.</span>
                        </li>
                        <li><iconify-icon icon="vaadin:tools" class="feature-icon"></iconify-icon>
                            <span>Simple interface with powerful tools for creative freedom.</span>
                        </li>
                        <li><iconify-icon icon="streamline-flex:decent-work-and-economic-growth-remix" class="feature-icon"></iconify-icon>
                            <span>Built for both personal branding and professional growth.</span>
                        </li>

                    </ul>
                </div>
                <div class="about-img">
                    <img src="{{ asset('asset/img/about_us2.svg')}}" alt="About Image">
                </div>
            </div>

    </div>
@endsection
