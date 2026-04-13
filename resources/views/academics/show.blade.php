@extends('layouts.app')

@section('content')

    <div class="max-w-5xl mx-auto mb-12 animate-fade">

        <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-12">
            <div>
                <div
                    class="inline-block px-3 py-1 mb-3 rounded-full bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-300 text-xs font-bold uppercase tracking-wider">
                    Education & Skills
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-text-main">Academics</h1>
                <p class="text-muted mt-2 text-lg">My educational journey and professional achievements.</p>
            </div>

            @if(Auth::check() && Auth::id() === $user->id)
                <a href="{{ route('academics.edit', ['username' => Auth::user()->username]) }}"
                    class="px-5 py-2.5 rounded-full bg-card border border-custom text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center gap-2 shadow-sm group">
                    <iconify-icon icon="solar:pen-new-square-bold-duotone"
                        class="text-lg group-hover:animate-pulse"></iconify-icon>
                    Edit Timeline
                </a>
            @endif
        </div>

        <div class="mb-16">
            <h2 class="text-2xl font-bold text-text-main mb-8 flex items-center gap-3">
                <div class="p-2 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-600">
                    <iconify-icon icon="solar:square-academic-cap-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                Education Timeline
            </h2>

            <div
                class="relative space-y-8 pl-8 md:pl-12 before:absolute before:inset-0 before:ml-3.5 before:md:ml-5 before:h-full before:w-0.5 before:-translate-x-1/2 before:bg-gradient-to-b before:from-primary before:via-gray-200 before:dark:via-gray-700 before:to-transparent">

                <div class="relative group">
                    <div
                        class="absolute left-0 top-0 -ml-[1.6rem] md:-ml-[2.4rem] mt-1.5 flex h-10 w-10 items-center justify-center rounded-full border-4 border-body bg-primary text-white shadow-lg z-10">
                        <iconify-icon icon="solar:diploma-bold-duotone" class="text-lg"></iconify-icon>
                    </div>

                    <div
                        class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-2 mb-2">
                            <h3 class="text-xl font-bold text-text-main">Bachelor of Technology (B.Tech)</h3>
                            <span
                                class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-50 dark:bg-green-900/20 text-green-600 text-xs font-bold whitespace-nowrap border border-green-100 dark:border-green-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> Pursuing
                            </span>
                        </div>

                        <p class="text-primary font-bold mb-1">University/College Name</p>
                        <p class="text-xs text-muted font-bold uppercase tracking-wider mb-4">August 2021 - May 2025</p>

                        <p class="text-muted leading-relaxed">
                            Specialization in Computer Science & Engineering. Focused on subjects like Data Structures,
                            Algorithms, Artificial Intelligence, and Full Stack Web Development.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div
                        class="absolute left-0 top-0 -ml-[1.6rem] md:-ml-[2.4rem] mt-1.5 flex h-10 w-10 items-center justify-center rounded-full border-4 border-body bg-gray-200 dark:bg-gray-700 text-muted shadow-sm z-10 group-hover:bg-primary group-hover:text-white transition-colors">
                        <iconify-icon icon="solar:book-bookmark-bold-duotone" class="text-lg"></iconify-icon>
                    </div>

                    <div
                        class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 hover:-translate-y-1 transition-transform duration-300">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-2 mb-2">
                            <h3 class="text-xl font-bold text-text-main">Intermediate / Class 12th</h3>
                            <span
                                class="px-3 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-muted text-xs font-bold whitespace-nowrap border border-custom">
                                Completed
                            </span>
                        </div>

                        <p class="text-text-main font-bold mb-1">School/College Name</p>
                        <p class="text-xs text-muted font-bold uppercase tracking-wider mb-4">April 2019 - March 2021</p>

                        <p class="text-muted leading-relaxed">
                            Completed higher secondary education with a focus on Physics, Chemistry, and Mathematics (PCM).
                            Achieved distinction in Mathematics.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-text-main mb-8 flex items-center gap-3">
                <div class="p-2 rounded-xl bg-orange-50 dark:bg-orange-900/20 text-orange-600">
                    <iconify-icon icon="solar:cup-star-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                Certificates & Achievements
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div
                    class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:shadow-apple-hover hover:border-primary/50 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-14 h-14 rounded-2xl bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                            <iconify-icon icon="solar:trophy-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="font-bold text-text-main text-lg mb-1 group-hover:text-primary transition-colors">
                                Smart India Hackathon 2025</h3>
                            <p class="text-sm text-text-main font-medium">Winner</p>
                            <p class="text-xs text-muted mt-2">Issued by: <span class="font-bold">Govt. of India</span></p>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:shadow-apple-hover hover:border-primary/50 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                            <iconify-icon icon="solar:diploma-verified-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <div>
                            <h3 class="font-bold text-text-main text-lg mb-1 group-hover:text-primary transition-colors">
                                Certified Cloud Practitioner</h3>
                            <p class="text-sm text-text-main font-medium">AWS Certification</p>
                            <p class="text-xs text-muted mt-2">Issued by: <span class="font-bold">Amazon Web Services</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
