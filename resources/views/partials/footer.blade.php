{{-- <footer class="footer"> --}}
    <div class="footer">

        <div class="footer-content">
            &copy; {{ date('Y') }}
            <p style="display: flex!important">
                <a href="{{ url('/') }}">IMSPhare</a>. All rights reserved.
                {{-- <a href="{{ url('/about') }}">About</a> | --}}
                {{-- <a href="{{ url('/contact') }}">Contact Us</a> | --}}
                <a href="{{ route('privacy.show') }}">Privacy Policy</a> |
                <a href="{{ route('terms.show')}}">T&C</a>
                <a href="https://github.com/coodig" target="_blank" class="footer-link">Coodig Sphare</a>
            </p>
        </div>
    </div>

    {{--
</footer> --}}
