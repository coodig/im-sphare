{{-- <a href="{{ url('/about') }}">About</a> | --}}
{{-- <a href="{{ url('/contact') }}">Contact Us</a> | --}}
{{-- <footer class="footer"> --}}
    {{-- <div class="footer">
        <div class="footer-content">
            &copy; {{ date('Y') }}
            <p style="display: flex!important">
                <a href="{{ url('/') }}">IMSPhare</a>. All rights reserved.
                <a href="{{ route('privacy.show') }}">Privacy Policy</a> |
                <a href="{{ route('terms.show')}}">T&C</a>
                <a href="https://github.com/coodig" target="_blank" class="footer-link">Coodig Sphare</a>
            </p>
        </div>
    </div> --}}

    {{--
</footer> --}}


<div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4 text-xs text-muted py-1">
    <span>&copy; {{ date('Y') }} <strong class="text-text-main">IMSPhare</strong>. All rights reserved.</span>

    <div class="hidden md:block w-1 h-1 rounded-full bg-gray-300"></div>

    <div class="flex gap-4">
        {{-- <a href="{{ route('help-center.show') }}" class="hover:text-primary transition-colors">Help Center</a> --}}
        <a href="{{ route('privacy.show') }}" class="hover:text-primary transition-colors">Privacy</a>
        <a href="{{ route('contact-us.show') }}" class="hover:text-primary transition-colors">Contact Us</a>
        <a href="{{ route('terms.show')}}" class="hover:text-primary transition-colors">Terms</a>
        <a href="{{ route('coming-soon.show')}}" class="hover:text-primary transition-colors flex items-center gap-1">
            Coming Soon <iconify-icon icon="solar:rocket-2-bold-duotone"></iconify-icon>
        </a>
    </div>
</div>
