{{-- @extends('layouts.app')

@push('page-styles')
<style>

    #academics-page-content .edit-btn:hover {
        background-color: #2563EB !important;
    }
    #academics-page-content .achievement-card:hover {
        transform: translateY(-5px);
        border-color: #3B82F6 !important;
    }
</style>
@endpush


@section('content')

<div id="academics-page-content">

    <div class="academics-container" style="padding: 2rem; color: #E5E7EB;">

        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #374151; padding-bottom: 1rem; margin-bottom: 2.5rem;">
            <h1 class="page-title" style="font-size: 2.5rem; font-weight: bold; color: #FFFFFF;">Academics</h1>

            <a href="{{ route('academics.edit', ['username' => Auth::user()->username]) }}" class="edit-btn" style="display: flex; align-items: center; gap: 8px; background-color: #3B82F6; color: #FFFFFF; border-radius: 6px; text-decoration: none; font-weight: 500; transition: background-color 0.2s ease;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                Edit Information
            </a>
        </div>

        <section class="content-section" style="margin-bottom: 3rem;">
            <h2 class="section-title" style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Education Timeline</h2>

            <div class="timeline" style="position: relative; padding-left: 30px; border-left: 3px solid #374151;">

                <div class="timeline-item" style="position: relative; margin-bottom: 2.5rem;">
                    <div class="timeline-dot" style="position: absolute; left: -17px; top: 5px; width: 30px; height: 30px; border-radius: 50%; background-color: #111827; border: 3px solid #3B82F6;"></div>
                    <div class="timeline-content" style="background-color: #1F2937; padding: 1.5rem; border-radius: 8px; border: 1px solid #374151;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; color: #F9FAFB;">Bachelor of Technology (B.Tech)</h3>
                        <p class="institution" style="font-weight: 500; color: #D1D5DB; margin: 4px 0;">University/College Name</p>
                        <p class="date" style="font-size: 0.9rem; color: #9CA3AF; margin-bottom: 10px;">August 2021 - May 2025</p>
                        <p class="description" style="color: #D1D5DB; line-height: 1.6;">Specialization in Computer Science & Engineering. Focused on subjects like Data Structures, AI, and Web Development.</p>
                    </div>
                </div>


                <div class="timeline-item" style="position: relative; margin-bottom: 2.5rem;">
                    <div class="timeline-dot" style="position: absolute; left: -17px; top: 5px; width: 30px; height: 30px; border-radius: 50%; background-color: #111827; border: 3px solid #3B82F6;"></div>
                    <div class="timeline-content" style="background-color: #1F2937; padding: 1.5rem; border-radius: 8px; border: 1px solid #374151;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; color: #F9FAFB;">Bachelor of Technology (B.Tech)</h3>
                        <p class="institution" style="font-weight: 500; color: #D1D5DB; margin: 4px 0;">University/College Name</p>
                        <p class="date" style="font-size: 0.9rem; color: #9CA3AF; margin-bottom: 10px;">August 2021 - May 2025</p>
                        <p class="description" style="color: #D1D5DB; line-height: 1.6;">Specialization in Computer Science & Engineering. Focused on subjects like Data Structures, AI, and Web Development.</p>
                    </div>
                </div>

                <div class="timeline-item" style="position: relative; margin-bottom: 2.5rem;">
                    <div class="timeline-dot" style="position: absolute; left: -17px; top: 5px; width: 30px; height: 30px; border-radius: 50%; background-color: #111827; border: 3px solid #3B82F6;"></div>
                    <div class="timeline-content" style="background-color: #1F2937; padding: 1.5rem; border-radius: 8px; border: 1px solid #374151;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; color: #F9FAFB;">Intermediate / Class 12th</h3>
                        <p class="institution" style="font-weight: 500; color: #D1D5DB; margin: 4px 0;">School/College Name</p>
                        <p class="date" style="font-size: 0.9rem; color: #9CA3AF; margin-bottom: 10px;">April 2019 - March 2021</p>
                        <p class="description" style="color: #D1D5DB; line-height: 1.6;">Completed higher secondary education with a focus on Physics, Chemistry, and Mathematics (PCM).</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <h2 class="section-title" style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Certificates & Achievements</h2>
            <div class="achievements-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">


                <article class="achievement-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 8px; padding: 1.5rem; text-align: center; transition: transform 0.2s ease, border-color 0.2s ease;">
                    <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">🏆</div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; color: #F9FAFB; margin-bottom: 0.5rem;">Smart India Hackathon 2025 Winner</h4>
                    <p class="issuer" style="font-weight: 500; color: #9CA3AF;">Issued by: Govt. of India</p>
                </article>

                <article class="achievement-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 8px; padding: 1.5rem; text-align: center; transition: transform 0.2s ease, border-color 0.2s ease;">
                    <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📜</div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; color: #F9FAFB; margin-bottom: 0.5rem;">Certified Cloud Practitioner</h4>
                    <p class="issuer" style="font-weight: 500; color: #9CA3AF;">Issued by: Amazon Web Services</p>
                </article>

            </div>
        </section>

    </div>

</div>

@endsection --}}



@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-12">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-300 text-xs font-bold uppercase tracking-wider">
                Education & Skills
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main">Academics</h1>
            <p class="text-muted mt-2 text-lg">My educational journey and professional achievements.</p>
        </div>

        @if(Auth::check() && Auth::id() === $user->id)
            <a href="{{ route('academics.edit', ['username' => Auth::user()->username]) }}"
               class="px-5 py-2.5 rounded-full bg-card border border-custom text-text-main font-bold text-sm hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center gap-2 shadow-sm group">
                <iconify-icon icon="solar:pen-new-square-bold-duotone" class="text-lg group-hover:animate-pulse"></iconify-icon>
                Edit Timeline
            </a>
        @endif
    </div>

    <div class="mb-16">
        <h2 class="text-2xl font-bold text-text-main mb-8 flex items-center gap-3">
            <div class="p-2 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-600">
                <iconify-icon icon="solar:mortarboard-bold-duotone" class="text-2xl"></iconify-icon>
            </div>
            Education Timeline
        </h2>

        <div class="relative space-y-8 pl-8 md:pl-12 before:absolute before:inset-0 before:ml-3.5 before:md:ml-5 before:h-full before:w-0.5 before:-translate-x-1/2 before:bg-gradient-to-b before:from-primary before:via-gray-200 before:dark:via-gray-700 before:to-transparent">

            <div class="relative group">
                <div class="absolute left-0 top-0 -ml-[1.6rem] md:-ml-[2.4rem] mt-1.5 flex h-10 w-10 items-center justify-center rounded-full border-4 border-body bg-primary text-white shadow-lg z-10">
                    <iconify-icon icon="solar:diploma-bold-duotone" class="text-lg"></iconify-icon>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-2 mb-2">
                        <h3 class="text-xl font-bold text-text-main">Bachelor of Technology (B.Tech)</h3>
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-50 dark:bg-green-900/20 text-green-600 text-xs font-bold whitespace-nowrap border border-green-100 dark:border-green-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> Pursuing
                        </span>
                    </div>

                    <p class="text-primary font-bold mb-1">University/College Name</p>
                    <p class="text-xs text-muted font-bold uppercase tracking-wider mb-4">August 2021 - May 2025</p>

                    <p class="text-muted leading-relaxed">
                        Specialization in Computer Science & Engineering. Focused on subjects like Data Structures, Algorithms, Artificial Intelligence, and Full Stack Web Development.
                    </p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute left-0 top-0 -ml-[1.6rem] md:-ml-[2.4rem] mt-1.5 flex h-10 w-10 items-center justify-center rounded-full border-4 border-body bg-gray-200 dark:bg-gray-700 text-muted shadow-sm z-10 group-hover:bg-primary group-hover:text-white transition-colors">
                    <iconify-icon icon="solar:book-bookmark-bold-duotone" class="text-lg"></iconify-icon>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-2 mb-2">
                        <h3 class="text-xl font-bold text-text-main">Intermediate / Class 12th</h3>
                        <span class="px-3 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-muted text-xs font-bold whitespace-nowrap border border-custom">
                            Completed
                        </span>
                    </div>

                    <p class="text-text-main font-bold mb-1">School/College Name</p>
                    <p class="text-xs text-muted font-bold uppercase tracking-wider mb-4">April 2019 - March 2021</p>

                    <p class="text-muted leading-relaxed">
                        Completed higher secondary education with a focus on Physics, Chemistry, and Mathematics (PCM). Achieved distinction in Mathematics.
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

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:shadow-apple-hover hover:border-primary/50 transition-all duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-yellow-50 dark:bg-yellow-900/20 text-yellow-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:trophy-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="font-bold text-text-main text-lg mb-1 group-hover:text-primary transition-colors">Smart India Hackathon 2025</h3>
                        <p class="text-sm text-text-main font-medium">Winner</p>
                        <p class="text-xs text-muted mt-2">Issued by: <span class="font-bold">Govt. of India</span></p>
                    </div>
                </div>
            </div>

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple hover:shadow-apple-hover hover:border-primary/50 transition-all duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:diploma-verified-bold-duotone" class="text-3xl"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="font-bold text-text-main text-lg mb-1 group-hover:text-primary transition-colors">Certified Cloud Practitioner</h3>
                        <p class="text-sm text-text-main font-medium">AWS Certification</p>
                        <p class="text-xs text-muted mt-2">Issued by: <span class="font-bold">Amazon Web Services</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
