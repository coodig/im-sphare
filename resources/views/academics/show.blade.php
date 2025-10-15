@extends('layouts.app')

{{-- नॉन-इनलाइन CSS (जैसे :hover) के लिए स्टाइल ब्लॉक --}}
@push('page-styles')
<style>
    /* यह स्टाइल इनलाइन नहीं हो सकतीं, इसलिए इन्हें यहाँ रखा गया है */
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

        {{-- Page Header --}}
        <div class="page-header" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #374151; padding-bottom: 1rem; margin-bottom: 2.5rem;">
            <h1 class="page-title" style="font-size: 2.5rem; font-weight: bold; color: #FFFFFF;">Academics</h1>

            <a href="{{ route('academics.edit', ['username' => Auth::user()->username]) }}" class="edit-btn" style="display: flex; align-items: center; gap: 8px; background-color: #3B82F6; color: #FFFFFF; border-radius: 6px; text-decoration: none; font-weight: 500; transition: background-color 0.2s ease;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                Edit Information
            </a>
        </div>

        {{-- Education Timeline Section --}}
        <section class="content-section" style="margin-bottom: 3rem;">
            <h2 class="section-title" style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Education Timeline</h2>

            <div class="timeline" style="position: relative; padding-left: 30px; border-left: 3px solid #374151;">

                {{-- Timeline Item 1: B.Tech --}}
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

                {{-- Timeline Item 2: Intermediate --}}
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

        {{-- Achievements Section --}}
        <section class="content-section">
            <h2 class="section-title" style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">Certificates & Achievements</h2>
            <div class="achievements-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">

                {{-- Achievement Card 1 --}}
                <article class="achievement-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 8px; padding: 1.5rem; text-align: center; transition: transform 0.2s ease, border-color 0.2s ease;">
                    <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">🏆</div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; color: #F9FAFB; margin-bottom: 0.5rem;">Smart India Hackathon 2025 Winner</h4>
                    <p class="issuer" style="font-weight: 500; color: #9CA3AF;">Issued by: Govt. of India</p>
                </article>

                {{-- Achievement Card 2 --}}
                <article class="achievement-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 8px; padding: 1.5rem; text-align: center; transition: transform 0.2s ease, border-color 0.2s ease;">
                    <div class="card-icon" style="font-size: 2.5rem; margin-bottom: 1rem;">📜</div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; color: #F9FAFB; margin-bottom: 0.5rem;">Certified Cloud Practitioner</h4>
                    <p class="issuer" style="font-weight: 500; color: #9CA3AF;">Issued by: Amazon Web Services</p>
                </article>

            </div>
        </section>

    </div>

</div>

@endsection
