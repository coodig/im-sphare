
<footer class="footer">
    <div class="footer-content">
        &copy; {{ date('Y') }}
        <a href="{{ url('/') }}" class="footer-link">IMSPhare</a>. All rights reserved. |
        {{-- <a href="{{ url('/about') }}" class="footer-link">About</a> | --}}
        {{-- <a href="{{ url('/contact') }}" class="footer-link">Contact Us</a> | --}}
        <a href="{{ route('privacy.show') }}" class="footer-link">Privacy Policy</a> |
        <a href="{{ route('terms.show')}}" class="footer-link">T&C</a>
        {{-- <a href="https://github.com/coodig" target="_blank" class="footer-link">Coodig Sphare</a> --}}
    </div>
</footer>
