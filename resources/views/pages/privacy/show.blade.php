@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col items-center text-center mb-12">
        <div class="inline-block px-3 py-1 mb-4 rounded-full bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 text-xs font-bold uppercase tracking-wider">
            Legal & Privacy
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-text-main mb-4">Privacy Policy</h1>
        <p class="text-muted text-lg max-w-2xl">
            At <span class="text-text-main font-bold">IMSphare</span>, your privacy is our priority. We are committed to protecting the personal information you share with us.
        </p>
        <p class="text-sm text-muted mt-4 font-medium">Last updated: <span class="text-primary">{{ date('F d, Y') }}</span></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:folder-with-files-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Information Collection</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        We collect only the information necessary to provide and improve our services, ensuring transparency in every step.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-green-50 dark:bg-green-900/20 text-green-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:shield-check-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Data Protection</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        We utilize industry-standard security measures and encryption to safeguard your data from unauthorized access.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:share-circle-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Third-Party Sharing</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        Your trust is sacred. We never sell or share your personal data with third parties without your explicit consent.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-sm hover:shadow-apple-hover transition-all group">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-orange-50 dark:bg-orange-900/20 text-orange-600 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                    <iconify-icon icon="solar:refresh-circle-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h3 class="font-bold text-text-main text-lg mb-2">Policy Updates</h3>
                    <p class="text-muted text-sm leading-relaxed">
                        We may update this policy occasionally. You will be notified of any significant changes via email or dashboard alerts.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-12">
        <div class="space-y-10 text-muted leading-relaxed text-lg">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    1. Information We Collect
                </h3>
                <p>
                    We collect information you provide directly to us, such as when you create an account, update your profile, or communicate with us. This may include your name, email address, phone number, and project details.
                </p>
            </section>

            <hr class="border-custom">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    2. How We Use Your Data
                </h3>
                <p class="mb-4">We use the information we collect to:</p>
                <ul class="list-disc pl-6 space-y-2 marker:text-primary">
                    <li>Provide, maintain, and improve our services.</li>
                    <li>Process transactions and send related information.</li>
                    <li>Send you technical notices, updates, security alerts, and support messages.</li>
                    <li>Respond to your comments, questions, and requests.</li>
                </ul>
            </section>

            <hr class="border-custom">

            <section>
                <h3 class="text-2xl font-bold text-text-main mb-4 flex items-center gap-2">
                    3. Contact Us
                </h3>
                <p>
                    If you have any questions about this Privacy Policy, please contact us at:
                </p>
                <a href="{{ route('contact.show', ['username' => 'admin']) }}" class="inline-flex items-center gap-2 mt-4 px-6 py-3 rounded-full bg-body border border-custom text-text-main font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">
                    <iconify-icon icon="solar:letter-bold-duotone"></iconify-icon> Contact Support
                </a>
            </section>

        </div>
    </div>

</div>

@endsection
