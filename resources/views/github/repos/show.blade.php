{{--
@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <div class="repo-name">
        <h1>show repo page</h1>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')

    {{-- <div class="page about-page"> --}}
        <div class="repository_detail_container">

            <div class="repository_detail_header">
                <div class="repository_title">{{ $repoDetails['name'] }}</div>
                <div class="repository_description">
                    {{ $repoDetails['description'] ?? 'No description available' }}
                </div>


            </div>

            <div class="repository_detail_section">

                <div class="div-1">

                    <h2>📘 README</h2>
                    @if($parsedHtml)
                        <div class="readme-box">
                             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.8.1/github-markdown.min.css">
                            {!! $parsedHtml !!}
                        </div>
                    @else
                        <p><i>No README found.</i></p>
                    @endif



                    {{-- <h1>My Project Name</h1>

                    <h2>🔍 Description</h2>
                    <p>This is a dummy project used for showcasing repository details. You can replace this content with
                        your actual project documentation. The goal of this project is to demonstrate how to display and
                        manage repository-related information in a user-friendly way.</p>

                    <hr>

                    <h2>🚀 Features</h2>
                    <ul>
                        <li>Display repository name, description, and metadata</li>
                        <li>User-friendly layout with flex-based design</li>
                        <li>Responsive structure</li>
                        <li>Dummy data for testing UI integration</li>
                    </ul>

                    <hr>

                    <h2>📦 Installation</h2>
                    <pre><code># Clone the repository
                    git clone https://github.com/your-username/your-repo-name.git

                    # Navigate to the project folder
                    cd your-repo-name

                    # Install dependencies (if applicable)
                    npm install
                    </code></pre>

                    <hr>

                    <h2>🛠️ Usage</h2>
                    <pre><code># Start development server
                    npm run dev

                    # Or build the project for production
                    npm run build
                    </code></pre>

                    <hr>

                    <h2>📁 Project Structure</h2>
                    <pre><code>.
                    ├── index.html
                    ├── style.css
                    ├── script.js
                    ├── README.md
                    ├── assets/
                    │   └── images/
                    └── data/
                        └── dummy.json
                    </code></pre>

                    <hr>

                    <h2>👨‍💻 Author</h2>
                    <p><strong>Name:</strong> Adarsh (replace with your name)<br>
                        <strong>Portfolio:</strong> <a href="#">your-portfolio-link.com</a>
                    </p>

                    <hr>

                    <h2>📄 License</h2>
                    <p>This project is licensed under the MIT License.</p>

                    <hr>
                    <p><em>Feel free to customize this README.md based on your project details.</em></p> --}}
                </div>

                <div class="div-2">
                    {{-- <h3>📊 Languages</h3>
                    <ul class="language-list">
                        <li><span class="lang-color" style="background-color:#f1e05a;"></span> JavaScript <span
                                class="percent">55%</span></li>
                        <li><span class="lang-color" style="background-color:#563d7c;"></span> CSS <span
                                class="percent">30%</span></li>
                        <li><span class="lang-color" style="background-color:#e34c26;"></span> HTML <span
                                class="percent">15%</span></li>
                    </ul> --}}
                    <h3>📊 Languages</h3>
                    <ul class="language-list">
                        @foreach($languages as $lang => $bytes)
                            <li>
                                <span class="lang-color" style="background-color:#ccc;"></span>
                                {{ $lang }}
                                <span class="percent">
                                    {{-- optional: calculate % --}}
                                    {{ round(($bytes / array_sum($languages)) * 100) }}%
                                </span>
                            </li>
                        @endforeach
                    </ul>


                    <hr>

                    {{-- <h3>📦 Releases</h3>
                    <p><strong>Latest:</strong> v1.2.0 <br><small>June 10, 2025</small></p>

                    <hr>

                    <h3>⭐ GitHub Stats</h3>
                    <ul class="github-stats">
                        <li>🌟 Stars: <strong>120</strong></li>
                        <li>🍴 Forks: <strong>45</strong></li>
                        <li>👁️ Watchers: <strong>80</strong></li>
                    </ul> --}}
                    <h3>📦 Releases</h3>
                    @if(count($release) > 0)
                        <p><strong>Latest:</strong> {{ $release[0]['tag_name'] ?? 'v1.0' }} <br>
                            <small>{{ \Carbon\Carbon::parse($release[0]['published_at'])->toFormattedDateString() }}</small>
                        </p>
                    @else
                        <p>No releases yet.</p>
                    @endif

                    <hr>

                    <h3>⭐ GitHub Stats</h3>
                    <ul class="github-stats">
                        <li>🌟 Stars: <strong>{{ $repoDetails['stargazers_count'] }}</strong></li>
                        <li>🍴 Forks: <strong>{{ $repoDetails['forks_count'] }}</strong></li>
                        <li>👁️ Watchers: <strong>{{ $repoDetails['watchers_count'] }}</strong></li>
                    </ul>

                </div>

                {{-- <h2>Project Detail</h2> --}}

            </div>

            {{-- <div class="detail_section">
                <h2>readme</h2>
                <div class="map-container">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6846.140932325604!2d80.87544765608858!3d26.769266762655167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bf9b7ccef66bd%3A0xadd6c2a91587fda3!2sMahindra%20Narain%20Automobiles%20-%20SUV%20%26%20Commercial%20Vehicle%20Showroom!5e1!3m2!1sen!2sin!4v1751170534426!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div> --}}

                {{-- <div class="contact-form">
                    <h2>Contact Form</h2>
                    <form action="">
                        <div class="contact-form-items">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>

                            <label for="email">Your Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>

                            <label for="subject">Your Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Subject of your message" required>

                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" placeholder="Write your message here..."
                                required></textarea>

                        </div>

                        <span><button type="submit" class="contact-form-items">Send Us</button></span>
                    </form>

                </div>

                <div class="contact-footer">
                    <p>We’re here to support your journey. Whether it’s feedback, questions, or collaboration — feel free to
                        reach out. Let’s grow together.</p>
                </div>
            </div> --}}

        </div>
@endsection
