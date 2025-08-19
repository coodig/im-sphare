@extends('layouts.app')

@section('content')

    <div class="about-container">

        <div class="page-header">
            <div class="page-title">Privacy Policy</div>
            <div class="page-description">Your privacy is important to us at IMSphare.</div>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p>
                    At <strong>IMSphare</strong>, we are committed to protecting your personal information and your right to privacy.
                    This Privacy Policy outlines how we collect, use, and protect the data you share with us.
                </p>

                <ul class="about-features">
                    <li>
                        <iconify-icon icon="mdi:account-key-outline" class="feature-icon"></iconify-icon>
                        <span><strong>Information Collection:</strong> We collect only the information necessary to provide and improve our services.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:shield-lock-outline" class="feature-icon"></iconify-icon>
                        <span><strong>Data Protection:</strong> We use strong security measures to safeguard your data from unauthorized access.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:eye-off-outline" class="feature-icon"></iconify-icon>
                        <span><strong>Third-Party Sharing:</strong> We never sell or share your data with third parties without your consent.</span>
                    </li>
                    <li>
                        <iconify-icon icon="mdi:update" class="feature-icon"></iconify-icon>
                        <span><strong>Policy Updates:</strong> We may update this policy from time to time. You will be notified of any significant changes.</span>
                    </li>
                </ul>
            </div>

            <div class="about-img">
                <img src="{{ asset('asset/img/about.jpg') }}" alt="Privacy Image">
            </div>

            <div class="about-footer">
                <p>By using IMSphare, you agree to the terms of this privacy policy. We are committed to maintaining your trust.</p>
            </div>
        </div>

    </div>
@endsection
