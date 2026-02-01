@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col items-center text-center mb-12">
        <div class="inline-block px-3 py-1 mb-4 rounded-full bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 text-xs font-bold uppercase tracking-wider">
            Terms of Service
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-text-main mb-4">Terms & Conditions</h1>
        <p class="text-muted text-lg max-w-2xl">
            Please read these terms carefully before using <span class="text-text-main font-bold">IMSphare</span>. Your use of the platform constitutes your agreement to these rules.
        </p>
        <p class="text-sm text-muted mt-4 font-medium">Effective Date: <span class="text-primary">{{ date('F d, Y') }}</span></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:user-id-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Account Responsibility</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        You are responsible for maintaining the confidentiality of your account credentials and for all activities under your account.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-orange-50 dark:bg-orange-900/20 text-orange-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:gavel-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Legal Use</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        You agree to use the platform only for lawful purposes and in accordance with all applicable local, state, and international laws.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-green-50 dark:bg-green-900/20 text-green-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:file-check-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Content Ownership</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Your content remains yours. However, by uploading, you grant us a license to display, distribute, and promote it on the platform.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-red-50 dark:bg-red-900/20 text-red-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:danger-circle-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Limitation of Liability</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        IMSphare is not liable for any direct, indirect, incidental, or consequential damages arising from your use of the site.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-12">
        <div class="space-y-10 text-muted leading-relaxed text-lg">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    1. Acceptance of Terms
                </h3>
                <p>
                    By creating an account or accessing IMSphare, you verify that you have read, understood, and agree to be bound by these Terms. If you do not agree to these Terms, you must not access or use the Service.
                </p>
            </section>

            <hr class="border-custom">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    2. User Conduct
                </h3>
                <p class="mb-4">You agree not to engage in any of the following prohibited activities:</p>
                <ul class="list-disc pl-6 space-y-2 marker:text-primary">
                    <li>Copying, distributing, or disclosing any part of the Service in any medium.</li>
                    <li>Using any automated system, including "robots" and "spiders," to access the Service.</li>
                    <li>Attempting to interfere with, compromise the system integrity or security.</li>
                    <li>Uploading invalid data, viruses, worms, or other software agents.</li>
                </ul>
            </section>

            <hr class="border-custom">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    3. Modifications
                </h3>
                <p>
                    We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days' notice prior to any new terms taking effect.
                </p>
            </section>

            <div class="mt-12 p-6 rounded-2xl bg-body border border-custom flex flex-col md:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="font-bold text-text-main">Questions regarding the Terms?</h4>
                    <p class="text-sm">Our support team is here to help you understand your rights.</p>
                </div>
                <a href="{{ route('contact.show', ['username' => 'admin']) }}" class="px-6 py-2.5 rounded-full bg-primary text-white font-bold hover:bg-primary-hover transition-all">
                    Contact Us
                </a>
            </div>

        </div>
    </div>

</div>

@endsection
