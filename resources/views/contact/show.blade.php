{{-- <div class="page about-page"> --}}
{{-- @extends('layouts.app')

@section('content')

        <div class="contact-container">

            <a href="{{route('contact_me.edit',['username'=>Auth::user()->profile])}}">Edit</a>
            <div class="page-header">
                <div class="page-title">Contact</div>
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
                <div class="contact-footer">
                    <p>We’re here to support your journey. Whether it’s feedback, questions, or collaboration — feel free to
                        reach out. Let’s grow together.</p>
                </div>
            </div>

    </div>
@endsection --}}



@extends('layouts.app')

{{-- नॉन-इनलाइन CSS (जैसे :hover, :focus) के लिए स्टाइल ब्लॉक --}}
@push('page-styles')
<style>
    .contact-input:focus {
        border-color: #3B82F6 !important;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3) !important;
    }
    .submit-btn:hover {
        background-color: #2563EB !important;
        transform: translateY(-2px);
    }
    .social-link:hover {
        color: #3B82F6 !important;
        transform: scale(1.1);
    }
    .edit-btn-contact:hover {
        background-color: #374151 !important;
    }
</style>
@endpush


@section('content')

<div class="contact-page-container" style="padding: 2rem; color: #E5E7EB; font-family: sans-serif;">

    {{-- 1. Page Header --}}
    <div class="page-header" style="position: relative; text-align: center; padding: 2rem 1rem; margin-bottom: 3rem;">
        <h1 style="font-size: 2.8rem; font-weight: bold; color: #FFFFFF; margin-bottom: 0.5rem;">Contact Me</h1>
        <p style="font-size: 1.1rem; color: #9CA3AF; max-width: 600px; margin: 0 auto;">
            We’d love to hear from you! Whether you have a question, collaboration idea or just want to Say Hello — drop us a message.
        </p>
        {{-- Edit बटन को यहाँ बेहतर तरीके से रखा गया है --}}
        <a href="{{ route('contact_me.edit',['username'=>Auth::user()->username]) }}" class="edit-btn-contact" style="position: absolute; top: 0; right: 0; background-color: #1F2937; color: #E5E7EB; padding: 8px 15px; border-radius: 6px; text-decoration: none; font-size: 0.9rem; border: 1px solid #374151; transition: background-color 0.2s ease;">Edit</a>
    </div>

    {{-- 2. Main Content Grid (Contact Info + Form) --}}
    <div class="main-content-grid" style="display: grid; grid-template-columns: 1fr; gap: 3rem; margin-bottom: 4rem; max-width: 1200px; margin-left: auto; margin-right: auto; @media (min-width: 768px) { grid-template-columns: 1fr 1.5fr; }">

        {{-- Left Column: Get in Touch --}}
        <div class="contact-details" style="background-color: #1F2937; padding: 2rem; border-radius: 12px; border: 1px solid #374151;">
            <h2 style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem; border-left: 4px solid #3B82F6; padding-left: 1rem;">Get in Touch</h2>

            <div class="info-item" style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                <span style="font-size: 1.5rem;">📍</span>
                <span style="color: #D1D5DB;">Gorakhpur, Uttar Pradesh, India</span>
            </div>
            <div class="info-item" style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                <span style="font-size: 1.5rem;">📧</span>
                <span style="color: #D1D5DB;">your.email@example.com</span>
            </div>
            <div class="info-item" style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                <span style="font-size: 1.5rem;">📞</span>
                <span style="color: #D1D5DB;">+91 12345 67890</span>
            </div>

            <div class="social-links" style="border-top: 1px solid #374151; padding-top: 1.5rem;">
                 <h3 style="font-size: 1.1rem; color: #FFFFFF; margin-bottom: 1rem;">Follow Me</h3>
                 <div style="display: flex; gap: 1.5rem;">
                    <a href="#" class="social-link" style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">L</a> {{-- LinkedIn --}}
                    <a href="#" class="social-link" style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">G</a> {{-- GitHub --}}
                    <a href="#" class="social-link" style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">T</a> {{-- Twitter/X --}}
                 </div>
            </div>
        </div>

        {{-- Right Column: Contact Form --}}
        <div class="contact-form-container" style="background-color: #1F2937; padding: 2rem; border-radius: 12px; border: 1px solid #374151;">
             <h2 style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Send a Message</h2>
             <form action="">
                 <div class="form-group" style="margin-bottom: 1.5rem;">
                     <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Your Name</label>
                     <input type="text" id="name" class="contact-input" required style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease;">
                 </div>
                 <div class="form-group" style="margin-bottom: 1.5rem;">
                     <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Your Email</label>
                     <input type="email" id="email" class="contact-input" required style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease;">
                 </div>
                 <div class="form-group" style="margin-bottom: 1.5rem;">
                     <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Message</label>
                     <textarea id="message" class="contact-input" rows="5" required style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease; resize: vertical;"></textarea>
                 </div>
                 <button type="submit" class="submit-btn" style="width: 100%; background-color: #3B82F6; color: #FFFFFF; padding: 14px; border-radius: 6px; border: none; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">Send Message</button>
             </form>
        </div>
    </div>

    {{-- 3. Map Section --}}
    <div class="map-section">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My Location</h2>
        <div class="map-wrapper" style="height: 400px; border-radius: 12px; overflow: hidden; border: 1px solid #374151;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.2292323281!2d83.2222448402471!3d26.76342111818388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446a0c332489%3A0x1ff3f978736f32e0!2sGorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1678886456789!5m2!1sen!2sin"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

@endsection
