@extends('layouts.app')

@section('content')

    <div class="about-container">

        <div class="page-header">
            <div class="page-title">Terms & Conditions</div>
            <div class="page-description">Please read these terms carefully before using IMSphare.</div>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p>
                    Welcome to <strong>IMSphare</strong>. By accessing or using this platform, you agree to be bound by these Terms & Conditions.
                    These terms apply to all users, including visitors, registered users, and contributors.
                </p>

                <ul class="about-features">
                    <li>
                        <iconify-icon icon="mdi:shield-lock" class="feature-icon"></iconify-icon>
                        <span><strong>Account Responsibility:</strong> You are responsible for maintaining the confidentiality of your account.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:gavel" class="feature-icon"></iconify-icon>
                        <span><strong>Legal Use:</strong> You agree to use the platform only for lawful purposes and in accordance with all applicable laws.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:file-document-outline" class="feature-icon"></iconify-icon>
                        <span><strong>Content Ownership:</strong> All content you upload remains yours, but you grant us a license to display it on our platform.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:alert-circle" class="feature-icon"></iconify-icon>
                        <span><strong>Limitation of Liability:</strong> IMSphare is not liable for any direct or indirect damages arising from your use of the site.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:update" class="feature-icon"></iconify-icon>
                        <span><strong>Changes to Terms:</strong> We may modify these terms at any time. Continued use of the platform means you accept the updated terms.</span>
                    </li>
                </ul>
            </div>

            <div class="about-img">
                <img src="{{ asset('asset/img/terms.svg') }}" alt="Terms Image">
            </div>

            {{-- <div class="about-footer">
                <p>By using IMSphare, you acknowledge that you have read and agree to these terms. Thank you for trusting us!</p>
            </div> --}}
        </div>

    </div>
@endsection
