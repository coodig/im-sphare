{{-- <footer class=" footer text-center p-2">
    <p class="mb-0">&copy; {{ date('Y') }} <a href="https://imsphare.oranbyte.com" target="_blank">IMSPhare</a>. All Rights Reserved.</p>
</footer> --}}
{{--
<footer class="bg-white border-top py-3 mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-secondary">
                &copy; {{ date('Y') }} <a href="https://imsphare.oranbyte.com" target="_blank" class="text-primary text-decoration-none fw-bold">imSphare</a>. All Rights Reserved.
            </div>
            <div class="text-secondary">
                Version 2.0
            </div>
        </div>
    </div>
</footer> --}}


<!-- Advanced Enterprise Footer -->
<footer class="bg-white border-top py-4 mt-auto" style="z-index: 10;">
    <div class="container-fluid px-4">
        <div class="row align-items-center gy-3">

            <!-- Column 1: Brand & Copyright -->
            <div class="col-12 col-md-4 text-center text-md-start">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-1">
                    <iconify-icon icon="solar:planet-3-bold-duotone" class="text-primary fs-5"></iconify-icon>
                    <span class="fw-bold text-dark fs-6">imSphare <span class="text-secondary fw-medium">Core</span></span>
                </div>
                <p class="text-secondary mb-0" style="font-size: 0.8rem;">
                    &copy; {{ date('Y') }} <a href="https://imsphare.oranbyte.com" target="_blank" class="text-primary text-decoration-none fw-bold hover-primary">Sphare Co.</a> All Rights Reserved.
                </p>
            </div>

            <!-- Column 2: Developer & Ecosystem Quick Links -->
            <div class="col-12 col-md-4 text-center">
                <div class="d-flex justify-content-center gap-3 gap-md-4 small fw-semibold">
                    <a href="#" class="text-secondary text-decoration-none transition-all hover-primary d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:document-text-bold-duotone" class="fs-6"></iconify-icon> API Docs
                    </a>
                    <span class="text-muted opacity-25">|</span>
                    <a href="#" class="text-secondary text-decoration-none transition-all hover-primary d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:shield-check-bold-duotone" class="fs-6"></iconify-icon> Sentinel Security
                    </a>
                    <span class="text-muted opacity-25">|</span>
                    <a href="#" class="text-secondary text-decoration-none transition-all hover-primary d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:help-bold-duotone" class="fs-6"></iconify-icon> Support Hub
                    </a>
                </div>
            </div>

            <!-- Column 3: System Metrics & Server Info -->
            <div class="col-12 col-md-4 text-center text-md-end">
                <div class="d-flex flex-column align-items-center align-items-md-end gap-1">

                    <!-- Server Badges -->
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-light text-secondary border rounded-pill fw-semibold shadow-sm d-flex align-items-center gap-1" style="font-size: 0.65rem; padding: 0.35rem 0.6rem;">
                            <iconify-icon icon="solar:map-point-bold-duotone" class="text-primary"></iconify-icon> ASIA (KNPR-01)
                        </span>
                        <span class="badge bg-light text-secondary border rounded-pill fw-semibold shadow-sm font-monospace" style="font-size: 0.65rem; padding: 0.35rem 0.6rem;">
                            v2.5.0-stable
                        </span>
                    </div>

                    <!-- Live Uptime Indicator -->
                    <div class="d-flex align-items-center gap-2 mt-1">
                        <!-- Pulsing Green Dot -->
                        <span class="position-relative d-flex align-items-center justify-content-center" style="width: 10px; height: 10px;">
                            <span class="position-absolute w-100 h-100 bg-success rounded-circle opacity-75" style="animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;"></span>
                            <span class="position-relative w-75 h-75 bg-success rounded-circle"></span>
                        </span>
                        <span class="fw-bold text-success" style="font-size: 0.75rem;">All systems operational</span>
                        <span class="text-muted font-monospace" style="font-size: 0.7rem;">(Ping: 12ms)</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Adding the ping animation style specifically for the footer dot -->
<style>
    @keyframes ping {
        0% { transform: scale(1); opacity: 1; }
        75%, 100% { transform: scale(2.5); opacity: 0; }
    }
</style>
