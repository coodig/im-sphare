<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/components.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

</head>

<body>
    <div class="main-wrapper">

        <div class="navbar">

            <div class="navbar-left">
                <div class="brand">
                    <a href="{{route('landing.show')}}"><img src="{{ asset('asset/icons/imsphare-icon.png') }}"
                            alt="Logo" class="logo" dark-theme></a>
                    <span class="brand-name"><a href="{{route('landing.show')}}">IMSPhare</a></span>
                </div>

            </div>

            <div class="navbar-right">
                <iconify-icon id="themeToggleIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"
                    onclick="toggleTheme()" role="button" style="cursor: pointer;"></iconify-icon>

                <iconify-icon id="fullScreenIcon" icon="solar:full-screen-square-bold-duotone" onclick="fullScreen()"
                    role="button" style="cursor: pointer;"></iconify-icon>

                @guest
                    <div class="auth-method">
                        <a href="{{ route('signup.show') }}" class="signup">SignUp</a>
                        &nbsp;&nbsp;
                        <a href="{{ route('login.show') }}" class="login" id="auth-login-btn">LogIn</a>
                    </div>
                @endguest

                @auth
                    <span
                        class="welcome user-name">Welcome,&nbsp;{{ ucwords(Auth::user()->profile->name ?? Auth::user()->username)}}</span>
                    <a href="{{ route('profile.show', ['username' => Auth::user()->username])}}">
                        <div class="profile-icon">
                            <div class="outer">
                                <div class="inner"></div>
                            </div>
                        </div>
                    </a>
                @endauth
            </div>
        </div>

        <div class="main-content">
            <section id="imsphare-hero">

                <div id="imsphare-hero-image" class="vector-image">
                    <img src="{{asset('asset/img/l_1.svg')}}">

                </div>
                <div id="imsphare-hero-content">
                    <h1>Build Your Portfolio with <span>IMSphare</span></h1>
                    <p>Showcase your skills, projects, and achievements in minutes.</p>
                    @guest
                        <a href="{{route('signup.show')}}" id="imsphare-btn-hero">Create Your Portfolio</a>
                    @endguest
                    @auth

                        <x-action-button url="{{ route('dashboard.show',['username' =>auth()->user()->username
                        ]) }}" type="view" label="Continue to Dashboard"/>
                    @endauth
                </div>
            </section>

            <section id="imsphare-features">
                <h2>Why IMSphare?</h2>
                <div class="imsphare-features-wrapper">
                    <div id="imsphare-features-grid">
                        <div class="imsphare-feature">
                            <iconify-icon icon="noto:artist-palette" class="icon"></iconify-icon>
                            Easy Portfolio Builder
                        </div>
                        <div class="imsphare-feature">
                            <iconify-icon icon="noto:high-voltage" class="icon"></iconify-icon>
                            Fast & Responsive
                        </div>
                        <div class="imsphare-feature">
                            <iconify-icon icon="noto:bar-chart" class="icon"></iconify-icon>
                            Analytics & Insights
                        </div>
                        <div class="imsphare-feature">
                            <iconify-icon icon="noto:locked" class="icon"></iconify-icon>
                            Secure & Reliable
                        </div>
                    </div>
                    <div id="imsphare-features-image">
                        <img src="{{asset('asset/img/l_2.svg')}}" alt="">
                    </div>
                </div>
            </section>

            <section id="imsphare-how">
                <h2>How It Works</h2>
                <div id="imsphare-steps">
                    <div class="imsphare-step">
                        <div class="imsphare-step-content">
                            <div class="step-avatar">
                                <img src="{{asset('asset/img/l_3.svg')}}" alt="User Photo">
                            </div>
                            <div class="step-text">
                                <strong>1. Sign Up</strong>
                            </div>
                        </div>

                        <div class="imsphare-step-content">
                            <div class="step-avatar">
                                <img src="{{asset('asset/img/l_4.svg')}}" alt="User Photo">
                            </div>
                            <div class="step-text">
                                <strong>2. Customize Portfolio</strong>
                            </div>
                        </div>
                        <div class="imsphare-step-content">
                            <div class="step-avatar">
                                <img src="{{asset('asset/img/l_5.svg')}}" alt="User Photo">
                            </div>
                            <div class="step-text">
                                <strong>3. Share & Grow</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="imsphare-testimonials">
                <h2>Testimonials</h2>
                <div class="imsphare-testimonial">
                    <div class="imsphare-testimonials-content">
                        <div class="testimonial-avatar">
                            <img src="{{asset('asset/img/profile.svg')}}" alt="User Photo">
                        </div>
                        <div class="testimonial-text">
                            <p>"This portfolio platform has helped me showcase my work in a professional way.
                                A big thanks to the developer for making it so easy to use!"</p>
                            <strong>{{ucwords('Shubham Kumar')}}</strong>
                        </div>
                    </div>

                    <div class="imsphare-testimonials-content">
                        <div class="testimonial-avatar">
                            <img src="{{asset('asset/img/profile.svg')}}" alt="User Photo">
                        </div>
                        <div class="testimonial-text">
                            <p>"Imsphare is a great initiative for students and professionals.
                                The developer behind this platform has done an amazing job!"</p>
                            <strong>{{ucwords('Adarsh Vishwakarama')}}</strong>
                        </div>
                    </div>
                </div>
            </section>

            <section id="imsphare-cta">
                <h2>Connect with us for better experience!</h2>
                <div class="imsphare-cta-contaier">

                    <div class="imsphare-cta-wrapper">
                        <img src="{{asset('asset/img/l_7.svg')}}" alt="Join Us">
                        <a href="https://github.com/coodig" target="_blank" class="imsphare-cta-btn">
                            Join Our Team
                        </a>
                    </div>
                </div>
            </section>



        </div>

        <div class="imsphare-footer">
            <div class="footer-container">
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="{{ route('privacy.show') }}" class="footer-link">Privacy Policy</a>
                    <a href="{{ route('terms.show')}}" class="footer-link">Terms & Conditions</a>
                    <a href="{{ route('about_us.show')}}" class="footer-link">About Us</a>
                </div>

                <div class="footer-section">
                    <h3>Follow Us</h3>

                    <a href="https://github.com/adarshsharma1350" target="_blank" class="footer-link">Github</a>
                    <a href="www.linkedin.com/in/adarsh-vishwakarama-9a9a15210" target="_blank"
                        class="footer-link">LinkedIn</a>

                </div>

                <div class="footer-section">
                    <h3>Tech Support</h3>
                    <p>Email: adarshsharma1350@gmail.com</a></p>
                    <p>Phone: +91 88814 23949</a></p>
                    <p>Location: UP, India</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} <a href="{{ url('/') }}" class="footer-bottom-link">IMSPhare</a>&nbsp;All
                rights
                reserved.</p>
            <p>Illustrations by <a href="https://storyset.com/" target="_blank" class="footer-bottom-link">Storyset</a>
            </p>
        </div>

        </footer>


</body>

<script src="{{ asset('asset/js/script.js')}}"></script>
<script src="{{ asset('asset/js/landing.js')}}"></script>

</html>
