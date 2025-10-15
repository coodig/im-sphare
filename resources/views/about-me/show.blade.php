{{-- @extends('layouts.app')

@section('content')

        <div class="about-container">

            <div class="page-header">
                <div class="page-title">{{ ucfirst(Auth::user()->userabout->title ?? 'About') }}</div>
                <div class="page-description">{{ucfirst(Auth::user()->userabout->description ?? 'not available')}}</div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <p>
                        {{ ucfirst(Auth::user()->userabout->content ?? 'not available')}}
                    </p>
                </div>
                <div class="about-img">
                    <img src="{{Storage::url(Auth::user()->userabout->image ?? 'no image')}}" alt="this image">
                </div>
            </div>

    </div>
@endsection --}}



@extends('layouts.app')

{{-- नॉन-इनलाइन CSS (जैसे :hover) के लिए स्टाइल ब्लॉक --}}
@push('page-styles')
<style>
    .cta-button:hover {
        background-color: #2563EB !important; /* Darker blue on hover */
        transform: translateY(-2px);
    }
    .value-card:hover {
        border-color: #3B82F6 !important;
        transform: translateY(-5px);
    }
</style>
@endpush


@section('content')

<div class="about-page-container" style="padding: 2rem; color: #E5E7EB; font-family: sans-serif;">

    {{-- 1. Page Header Section --}}
    <div class="page-header" style="text-align: center; background: linear-gradient(145deg, #1F2937, #111827); padding: 3rem 2rem; border-radius: 12px; margin-bottom: 3rem; border: 1px solid #374151;">
        <h1 class="page-title" style="font-size: 2.8rem; font-weight: bold; color: #FFFFFF; margin-bottom: 0.5rem;">
            {{ ucfirst(Auth::user()->userabout->title ?? 'About Me') }}
        </h1>
        <p class="page-description" style="font-size: 1.1rem; color: #9CA3AF; max-width: 600px; margin: 0 auto;">
            {{ ucfirst(Auth::user()->userabout->description ?? 'A brief introduction to my journey, skills, and aspirations.') }}
        </p>
    </div>

    {{-- 2. Main Story and Image Section --}}
    <div class="about-content" style="display: flex; flex-wrap: wrap; align-items: center; gap: 3rem; margin-bottom: 4rem;">

        <div class="about-img" style="flex: 1; min-width: 300px;">
            <img src="{{ Storage::url(Auth::user()->userabout->image ?? 'default/path/to/image.jpg') }}" alt="Profile Image" style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); border: 3px solid #374151;">
        </div>

        <div class="about-text" style="flex: 1.5; min-width: 300px;">
            <h2 style="font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 1rem; border-left: 4px solid #3B82F6; padding-left: 1rem;">My Story</h2>
            <p style="font-size: 1rem; color: #D1D5DB; line-height: 1.7;">
                {{ ucfirst(Auth::user()->userabout->content ?? 'यहां आप अपने बारे में विस्तार से लिख सकते हैं। अपनी यात्रा, अपने जुनून और आप जो करते हैं उसके बारे में बताएं। यह आपके व्यक्तित्व को दर्शाने का एक बेहतरीन मौका है।') }}
            </p>
        </div>
    </div>

    {{-- 3. Core Values Section (नया कंटेंट) --}}
    <div class="values-section" style="margin-bottom: 4rem;">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My Core Values</h2>
        <div class="values-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem;">

            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">💡</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Innovation</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I constantly seek new and creative ways to solve problems.</p>
            </div>
            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">🤝</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Collaboration</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I believe the best results come from effective teamwork.</p>
            </div>
            <div class="value-card" style="background-color: #1F2937; border: 1px solid #374151; border-radius: 10px; padding: 1.5rem; text-align: center; flex-basis: 280px; transition: all 0.3s ease;">
                <span style="font-size: 2.5rem;">🎯</span>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin: 0.5rem 0;">Quality</h3>
                <p style="color: #9CA3AF; font-size: 0.9rem;">I am committed to delivering high-quality and robust work.</p>
            </div>

        </div>
    </div>

    {{-- 4. Skills Section (नया कंटेंट) --}}
    <div class="skills-section" style="margin-bottom: 4rem;">
        <h2 style="text-align: center; font-size: 1.8rem; font-weight: 600; color: #FFFFFF; margin-bottom: 2rem;">My Skills</h2>
        <div class="skills-list" style="max-width: 700px; margin: 0 auto; padding: 2rem; background-color: #1F2937; border-radius: 10px; border: 1px solid #374151;">

            <div class="skill-item" style="margin-bottom: 1.2rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>PHP / Laravel</span><span>90%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 90%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="skill-item" style="margin-bottom: 1.2rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>JavaScript / React</span><span>75%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 75%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>
            <div class="skill-item">
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem; color: #E5E7EB; font-weight: 500;"><span>HTML / CSS</span><span>95%</span></div>
                <div class="progress-bar" style="background-color: #374151; border-radius: 5px; height: 10px; width: 100%;">
                    <div class="progress-fill" style="width: 95%; height: 100%; background-color: #3B82F6; border-radius: 5px;"></div>
                </div>
            </div>

        </div>
    </div>

    {{-- 5. Call to Action (CTA) Section (नया कंटेंट) --}}
    <div class="cta-section" style="text-align: center; padding: 2rem; background-color: #1F2937; border-radius: 10px; border: 1px solid #374151;">
        <h3 style="font-size: 1.5rem; color: #FFFFFF; margin-bottom: 1rem;">Let's Build Something Amazing Together</h3>
        <p style="color: #9CA3AF; margin-bottom: 1.5rem;">Interested in working with me? Feel free to reach out.</p>
        <a href="/contact" class="cta-button" style="display: inline-block; background-color: #3B82F6; color: #FFFFFF; padding: 12px 25px; border-radius: 6px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
            Contact Me
        </a>
    </div>

</div>

@endsection
