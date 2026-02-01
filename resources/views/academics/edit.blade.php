@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto mb-12 animate-fade">

    <div class="flex items-center gap-4 mb-8">
        <a href="{{ url()->previous() }}" class="p-2 rounded-full bg-body border border-custom text-muted hover:text-primary transition-colors">
            <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
        </a>
        <div>
            <h1 class="text-3xl font-bold text-text-main">Update Academics</h1>
            <p class="text-muted text-sm">Manage your education timeline and certificates.</p>
        </div>
    </div>

    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-10">

            <div class="space-y-6">
                <div class="flex items-center gap-2 mb-2">
                    <div class="p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600">
                        <iconify-icon icon="solar:mortarboard-bold-duotone" class="text-xl"></iconify-icon>
                    </div>
                    <h2 class="text-xl font-bold text-text-main">Education</h2>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 md:p-8">

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Institute / College</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                <iconify-icon icon="solar:buildings-bold-duotone" class="text-lg"></iconify-icon>
                            </span>
                            <input type="text" name="education_institute" placeholder="University Name" value="University/College Name"
                                class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Degree / Course</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                <iconify-icon icon="solar:diploma-bold-duotone" class="text-lg"></iconify-icon>
                            </span>
                            <input type="text" name="education_degree" placeholder="B.Tech, B.Sc, etc." value="Bachelor of Technology (B.Tech)"
                                class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="block text-sm font-bold text-text-main mb-2 ml-1">Start Date</label>
                            <input type="date" name="education_start"
                                class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-text-main mb-2 ml-1">End Date</label>
                            <input type="date" name="education_end"
                                class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Status</label>
                        <select name="education_status" class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main appearance-none">
                            <option value="pursuing">Pursuing</option>
                            <option value="completed">Completed</option>
                            <option value="dropped">Dropped</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Description</label>
                        <textarea name="education_desc" rows="3" placeholder="Brief details about your major, projects, etc."
                            class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main resize-none">Specialization in Computer Science & Engineering.</textarea>
                    </div>

                    <button type="button" class="mt-6 w-full py-3 rounded-xl border border-dashed border-primary/50 text-primary font-bold hover:bg-primary/5 transition-all flex items-center justify-center gap-2">
                        <iconify-icon icon="solar:add-circle-bold-duotone" class="text-lg"></iconify-icon> Add Another Education
                    </button>
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex items-center gap-2 mb-2">
                    <div class="p-2 rounded-lg bg-orange-50 dark:bg-orange-900/20 text-orange-600">
                        <iconify-icon icon="solar:cup-star-bold-duotone" class="text-xl"></iconify-icon>
                    </div>
                    <h2 class="text-xl font-bold text-text-main">Certificates</h2>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 md:p-8">

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Certificate Title</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                <iconify-icon icon="solar:medal-star-bold-duotone" class="text-lg"></iconify-icon>
                            </span>
                            <input type="text" name="cert_title" placeholder="e.g. AWS Certified" value="Smart India Hackathon 2025 Winner"
                                class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Issuing Organization</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                <iconify-icon icon="solar:shield-check-bold-duotone" class="text-lg"></iconify-icon>
                            </span>
                            <input type="text" name="cert_issuer" placeholder="e.g. Amazon, Google" value="Govt. of India"
                                class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block text-sm font-bold text-text-main mb-2 ml-1">Issue Date</label>
                        <input type="date" name="cert_date"
                            class="w-full px-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                    </div>

                    <button type="button" class="mt-6 w-full py-3 rounded-xl border border-dashed border-orange-500/50 text-orange-600 font-bold hover:bg-orange-50 dark:hover:bg-orange-900/10 transition-all flex items-center justify-center gap-2">
                        <iconify-icon icon="solar:add-circle-bold-duotone" class="text-lg"></iconify-icon> Add Another Certificate
                    </button>
                </div>
            </div>

        </div>

        <div class="sticky bottom-4 z-10 flex justify-end">
            <div class="bg-card/80 backdrop-blur-md border border-custom shadow-apple p-2 rounded-full flex gap-3">
                <a href="{{ url()->previous() }}" class="px-6 py-3 rounded-full hover:bg-gray-100 dark:hover:bg-white/10 text-text-main font-bold text-sm transition-all">
                    Cancel
                </a>
                <button type="submit" class="px-8 py-3 rounded-full bg-primary text-white font-bold text-sm shadow-lg hover:bg-primary-hover hover:-translate-y-0.5 transition-all flex items-center gap-2">
                    <iconify-icon icon="solar:disk-bold-duotone" class="text-lg"></iconify-icon>
                    Save Changes
                </button>
            </div>
        </div>

    </form>

</div>

@endsection
