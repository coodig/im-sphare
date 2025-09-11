@extends('layouts.app')

@section('content')

    {{-- <div class="page about-page"> --}}
        <div class="contact-container">

           <div class="back-btn">
                <a href="{{url()->previous()}}">Back</a>
           </div>
            <div class="page-header">
                <div class="page-title">Contact Edit form</div>
                <div class="page-description">
                    We’d love to hear from you! Whether you have a question, collaboration idea or just want to Say Hello —
                    drop us a message.
                </div>

            </div>

            <div class="contact-content">
                <div class="map-container">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6846.140932325604!2d80.87544765608858!3d26.769266762655167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bf9b7ccef66bd%3A0xadd6c2a91587fda3!2sMahindra%20Narain%20Automobiles%20-%20SUV%20%26%20Commercial%20Vehicle%20Showroom!5e1!3m2!1sen!2sin!4v1751170534426!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    {{-- <div class="map-button">
                        <a href="https://maps.google.com/..." target="_blank" class="view-map-btn">View Larger Map</a>
                    </div> --}}
                </div>

                <div class="contact-form">
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
                {{-- <div class="contact-footer-1"><p>We’re here to support your journey. Whether it’s feedback, questions, or collaboration — feel free to
                        reach out. Let’s grow together.</p></div> --}}
                <div class="contact-footer">
                    <p>We’re here to support your journey. Whether it’s feedback, questions, or collaboration — feel free to
                        reach out. Let’s grow together.</p>
                </div>
            </div>

    </div>
@endsection
