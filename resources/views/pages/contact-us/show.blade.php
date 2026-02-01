@extends('layouts.app')

@section('content')

    <div class="relative py-16 text-center overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-purple-500/20 rounded-full blur-[100px] -z-10 opacity-40 pointer-events-none">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <span
                class="inline-block py-1 px-3 rounded-full bg-body border border-custom text-xs font-bold text-purple-400 mb-6 tracking-wide uppercase">
                Get in Touch
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-text-main mb-6 tracking-tight">
                Contact Sphare Co.
            </h1>
            <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
                Have questions about the IMSPhare ecosystem, API access, or enterprise solutions? We're here to help.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-4 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-1 space-y-6">

                <div
                    class="bg-card p-6 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-4 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:letter-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="font-bold text-text-main text-lg mb-1">Chat to Support</h3>
                    <p class="text-sm text-muted mb-4">Speak to our friendly team.</p>
                    <a href="mailto:support@sphare.co"
                        class="text-primary font-bold text-sm flex items-center gap-1 hover:underline">
                        support@sphare.co <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>

                <div
                    class="bg-card p-6 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center text-orange-500 mb-4 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:map-point-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="font-bold text-text-main text-lg mb-1">Visit us</h3>
                    <p class="text-sm text-muted mb-4">Visit our HQ.</p>
                    <p class="text-text-main font-medium text-sm">
                        123 Sphare Labs, Tech Park,<br>
                        Cyber City, India 208001
                    </p>
                </div>

                <div
                    class="bg-card p-6 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 group">
                    <div
                        class="w-12 h-12 rounded-xl bg-green-500/10 flex items-center justify-center text-green-500 mb-4 group-hover:scale-110 transition-transform">
                        <iconify-icon icon="solar:handshake-bold-duotone" class="text-2xl"></iconify-icon>
                    </div>
                    <h3 class="font-bold text-text-main text-lg mb-1">Partnerships</h3>
                    <p class="text-sm text-muted mb-4">For enterprise inquiries.</p>
                    <a href="mailto:sales@sphare.co"
                        class="text-primary font-bold text-sm flex items-center gap-1 hover:underline">
                        sales@sphare.co <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>

            </div>

            <div class="lg:col-span-2">
                <div
                    class="bg-card rounded-[2.5rem] border border-custom p-8 md:p-10 shadow-apple relative overflow-hidden">

                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10 pointer-events-none">
                    </div>

                    <h2 class="text-2xl font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:plain-3-bold-duotone" class="text-primary"></iconify-icon>
                        Send us a message
                    </h2>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstname" class="block text-sm font-bold text-text-main mb-2 ml-1">First
                                    Name</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:user-circle-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="text" id="firstname" name="firstname" placeholder="John"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main placeholder:text-muted/50">
                                </div>
                            </div>
                            <div>
                                <label for="lastname" class="block text-sm font-bold text-text-main mb-2 ml-1">Last
                                    Name</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:user-circle-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="text" id="lastname" name="lastname" placeholder="Doe"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main placeholder:text-muted/50">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-bold text-text-main mb-2 ml-1">Email
                                    Address</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:letter-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="email" id="email" name="email" placeholder="you@company.com"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main placeholder:text-muted/50">
                                </div>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-bold text-text-main mb-2 ml-1">Phone
                                    (Optional)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:phone-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="tel" id="phone" name="phone" placeholder="+91 98765 00000"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main placeholder:text-muted/50">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="department"
                                class="block text-sm font-bold text-text-main mb-2 ml-1">Department</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:case-round-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <select id="department" name="department"
                                    class="w-full pl-11 pr-10 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select an inquiry type</option>
                                    <option value="support">Technical Support</option>
                                    <option value="sales">Sales & Enterprise</option>
                                    <option value="billing">Billing & Account</option>
                                    <option value="bug">Report a Bug</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-muted pointer-events-none">
                                    <iconify-icon icon="solar:alt-arrow-down-bold" class="text-sm"></iconify-icon>
                                </span>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-text-main mb-2 ml-1">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell us how we can help..."
                                class="w-full p-4 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main placeholder:text-muted/50 resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg shadow-lg shadow-primary/25 hover:bg-primary/90 transition-all hover:-translate-y-1 active:translate-y-0 flex items-center justify-center gap-2">
                            <span>Send Message</span>
                            <iconify-icon icon="solar:plain-bold-duotone" class="text-xl"></iconify-icon>
                        </button>

                    </form>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <p class="text-muted">
                Looking for quick answers?
                <a href="{{ route('help-center.show') }}"
                    class="text-text-main font-bold hover:text-primary transition-colors underline decoration-dotted">Check
                    out our Help Center</a>.
            </p>
        </div>
    </div>

@endsection
