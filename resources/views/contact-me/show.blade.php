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
                    Contact <span class="text-blue-600">{{ucwords(Auth::user()->username)}}</span>
                </h1>
                <p class="text-muted mt-2 max-w-xl text-lg">

                </p>
            </div>
            @if ('auth')

                <a href="{{ route('contact-me.edit', ['username' => Auth::user()->username])  }}"
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
                                <p class="text-text-main font-medium break-all">
                                    {{ Auth::user()->email }}
                                </p>
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
                                    {{ Auth::user()->profile->website ?? 'Not Available'}}
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
                                <p class="text-white  w-full py-4 font-medium text-text-main">
                                    {{ ucwords(Auth::user()->profile->name) ?? ucwords(Auth::user()->username) }}</p>
                                {{-- <input type="text" id="name" name="name" placeholder="John Doe" {{--
                                    class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                                --}}
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold text-text-main mb-2 ml-1">Your
                                    Email</label>
                                {{-- <input type="email" id="email" name="email" placeholder="john@example.com"
                                    class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                                --}}
                                <p class="text-white  w-full py-4 font-medium text-text-main">{{ Auth::user()->email }}</p>
                            </div>
                        </div>

                        <div class="flex justify-evenly">
                            <div>
                                <label for="message"
                                    class="block text-sm font-bold text-text-main mb-2 ml-1">Message</label>
                                <p class=" font-medium text-text-main">Hello! I create modern digital solutions. My focus is on solving complex problems with efficient code. Whether it is a web application using Laravel/React or a system-level project in C++, I aim for perfection.

Currently, I am working on a challenging project—creating my own programming language using C++—to demonstrate my deep understanding of compilers.</p>
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-sm font-bold text-text-main mb-2 ml-1">Message</label>
                                <textarea id="message" name="message" rows="6"
                                    placeholder="Hi Adarsh, I'd like to talk about..."
                                    class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main resize-none"></textarea>
                            </div>
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
