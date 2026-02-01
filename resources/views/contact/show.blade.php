{{--


@extends('layouts.app')

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

    <div class="page-header" style="position: relative; text-align: center; padding: 2rem 1rem; margin-bottom: 3rem;">
        <h1 style="font-size: 2.8rem; font-weight: bold; color: #FFFFFF; margin-bottom: 0.5rem;">Contact Me</h1>
        <p style="font-size: 1.1rem; color: #9CA3AF; max-width: 600px; margin: 0 auto;">
            We’d love to hear from you! Whether you have a question, collaboration idea or just want to Say Hello — drop
            us a message.
        </p>
        <a href="{{ route('contact_me.edit',['username'=>Auth::user()->username]) }}" class="edit-btn-contact"
            style="position: absolute; top: 0; right: 0; background-color: #1F2937; color: #E5E7EB; padding: 8px 15px; border-radius: 6px; text-decoration: none; font-size: 0.9rem; border: 1px solid #374151; transition: background-color 0.2s ease;">Edit</a>
    </div>

    <div class="main-content-grid"
        style="display: grid; grid-template-columns: 1fr; gap: 3rem; margin-bottom: 4rem; max-width: 1200px; margin-left: auto; margin-right: auto; @media (min-width: 768px) { grid-template-columns: 1fr 1.5fr; }">

        <div class="contact-details"
            style="background-color: #1F2937; padding: 2rem; border-radius: 12px; border: 1px solid #374151;">
            <h2
                style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem; border-left: 4px solid #3B82F6; padding-left: 1rem;">
                Get in Touch</h2>

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
                    <a href="#" class="social-link"
                        style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">L</a>
                    <a href="#" class="social-link"
                        style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">G</a>
                    <a href="#" class="social-link"
                        style="color: #9CA3AF; text-decoration: none; font-size: 1.5rem; transition: all 0.2s ease;">T</a>
                </div>
            </div>
        </div>


        <div class="contact-form-container"
            style="background-color: #1F2937; padding: 2rem; border-radius: 12px; border: 1px solid #374151;">
            <h2 style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Send a Message</h2>
            <form action="">
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="name"
                        style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Your
                        Name</label>
                    <input type="text" id="name" class="contact-input" required
                        style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease;">
                </div>
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="email"
                        style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Your
                        Email</label>
                    <input type="email" id="email" class="contact-input" required
                        style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease;">
                </div>
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label for="message"
                        style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #D1D5DB;">Message</label>
                    <textarea id="message" class="contact-input" rows="5" required
                        style="width: 100%; background-color: #374151; color: #E5E7EB; border: 1px solid #4B5563; border-radius: 6px; padding: 12px; outline: none; transition: all 0.2s ease; resize: vertical;"></textarea>
                </div>
                <button type="submit" class="submit-btn"
                    style="width: 100%; background-color: #3B82F6; color: #FFFFFF; padding: 14px; border-radius: 6px; border: none; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">Send
                    Message</button>
            </form>
        </div>
    </div>


    <div class="map-section">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My
            Location</h2>
        <div class="map-wrapper"
            style="height: 400px; border-radius: 12px; overflow: hidden; border: 1px solid #374151;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.2292323281!2d83.2222448402471!3d26.76342111818388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446a0c332489%3A0x1ff3f978736f32e0!2sGorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1678886456789!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

@endsection --}}


@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto mb-12 animate-fade">

        <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
            <div>
                <div
                    class="inline-block px-3 py-1 mb-2 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">
                    Get in touch
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-text-main">
                    Contact <span class="text-blue-600">{{ ucwords(Auth::user()->profile->name) }}</span>
                </h1>
                <p class="text-muted mt-2 max-w-xl text-lg">

                </p>
            </div>
            @if ('auth')

                <a href="#"
                    class="px-5 py-2.5 rounded-full border border-custom bg-card text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center gap-2 shadow-sm group">
                    <iconify-icon icon="solar:pen-new-square-bold-duotone"
                        class="text-lg group-hover:animate-pulse"></iconify-icon>
                    Edit Info
                </a>
            @endif
            {{-- <a href="{{ route('contact_me.edit' . ['username' => Auth::user()->username]) }}"
                class="px-5 py-2.5 rounded-full border border-custom bg-card text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center gap-2 shadow-sm group">
                <iconify-icon icon="solar:pen-new-square-bold-duotone"
                    class="text-lg group-hover:animate-pulse"></iconify-icon>
                Edit Info
            </a> --}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

            <div class="lg:col-span-1 space-y-8">
                <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 relative overflow-hidden h-full">

                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none">
                    </div>

                    <h3 class="text-xl font-bold text-text-main mb-8 flex items-center gap-2">
                        <iconify-icon icon="solar:user-id-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                        Contact Details
                    </h3>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4 group">
                            <div
                                class="p-3.5 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 shrink-0">
                                <iconify-icon icon="solar:map-point-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-muted uppercase tracking-wider mb-1">Location</p>
                                <p class="text-text-main font-medium leading-tight">
                                    Gorakhpur, Uttar Pradesh, India
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div
                                class="p-3.5 rounded-2xl bg-orange-50 dark:bg-orange-900/20 text-orange-600 dark:text-orange-400 shrink-0">
                                <iconify-icon icon="solar:letter-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-muted uppercase tracking-wider mb-1">Email</p>
                                <a href="mailto:adarshsharma1350@gmail.com"
                                    class="text-text-main font-medium hover:text-primary transition-colors break-all">
                                    adarshsharma1350@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div
                                class="p-3.5 rounded-2xl bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 shrink-0">
                                <iconify-icon icon="solar:globe-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-muted uppercase tracking-wider mb-1">Website</p>
                                <a href="#" target="_blank"
                                    class="text-text-main font-medium hover:text-primary transition-colors break-all">
                                    imsphare.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-8 border-t border-custom">
                        <h4 class="text-xs font-bold text-muted uppercase tracking-wider mb-4">Social Profiles</h4>

                        <div class="flex flex-wrap gap-3">
                            <a href="#"
                                class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center text-text-main hover:bg-black hover:text-white hover:border-black dark:hover:bg-white dark:hover:text-black transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                                <iconify-icon icon="logos:github-icon" class="text-xl"></iconify-icon>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center text-text-main hover:bg-[#0077b5] hover:text-white hover:border-[#0077b5] transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                                <iconify-icon icon="logos:linkedin-icon" class="text-xl"></iconify-icon>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center text-text-main hover:bg-black hover:text-white hover:border-black transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                                <iconify-icon icon="logos:twitter" class="text-xl"></iconify-icon>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-2xl bg-body border border-custom flex items-center justify-center text-text-main hover:bg-[#E1306C] hover:text-white hover:border-[#E1306C] transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                                <iconify-icon icon="logos:instagram-icon" class="text-xl"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 h-full">
                    <h3 class="text-2xl font-bold text-text-main mb-8">Send a Message</h3>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-text-main mb-2 ml-1">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe"
                                    class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold text-text-main mb-2 ml-1">Your
                                    Email</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com"
                                    class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-text-main mb-2 ml-1">Message</label>
                            <textarea id="message" name="message" rows="6"
                                placeholder="Hi Adarsh, I'd like to talk about..."
                                class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main resize-none"></textarea>
                        </div>

                        <div class="flex justify-end pt-2">
                            <button type="button"
                                class="px-10 py-4 rounded-full bg-primary text-white font-bold text-lg shadow-apple hover:bg-primary-hover hover:shadow-lg hover:-translate-y-1 transition-all flex items-center gap-2 w-full md:w-auto justify-center">
                                Send Message
                                <iconify-icon icon="solar:plain-3-bold-duotone" class="text-xl"></iconify-icon>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div
            class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-2 h-[400px] relative group overflow-hidden">

            <div
                class="absolute top-6 left-6 z-10 px-5 py-2.5 bg-card/90 backdrop-blur-md rounded-full border border-custom shadow-lg text-sm font-bold text-text-main flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                Located in Gorakhpur
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.2292323281!2d83.2222448402471!3d26.76342111818388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446a0c332489%3A0x1ff3f978736f32e0!2sGorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1678886456789!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0; border-radius: 2rem;" allowfullscreen="" loading="lazy"
                class="filter grayscale opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-700 ease-in-out">
            </iframe>
        </div>

    </div>

@endsection
