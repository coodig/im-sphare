{{-- <div class="modal fade" id="showUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>ID:</strong> <span id="showUserId"></span></p>
        <p><strong>Username:</strong> <span id="showUsername"></span></p>
        <p><strong>Email:</strong> <span id="showEmail"></span></p>
        <p><strong>Role:</strong> <span id="showRole"></span></p>
      </div>
    </div>
  </div>
</div> --}}

<div class="modal fade" id="showUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-light border-bottom-0 p-4">
                <h5 class="modal-title fw-bold d-flex align-items-center gap-2 text-dark">
                    <iconify-icon icon="solar:user-id-bold-duotone" class="text-primary fs-3"></iconify-icon> Identity Details
                </h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4 text-center">
                <div class="mb-4 position-relative d-inline-block">
                    <img src="https://ui-avatars.com/api/?name=Loading&background=f1f5f9&color=0f172a" id="showUserAvatar" width="80" height="80" class="rounded-circle shadow-sm border border-3 border-white">
                </div>

                <div class="d-flex flex-column gap-2 text-start">
                    <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-bold text-uppercase">System ID</span>
                        <span class="fw-bold font-monospace text-dark" id="showUserId">Loading...</span>
                    </div>
                    <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-bold text-uppercase">Username</span>
                        <span class="fw-bold text-dark" id="showUsername">Loading...</span>
                    </div>
                    <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-bold text-uppercase">Email Address</span>
                        <span class="fw-medium text-dark" id="showEmail">Loading...</span>
                    </div>
                    <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-bold text-uppercase">Access Level</span>
                        <span id="showRole"><span class="spinner-border spinner-border-sm text-primary"></span></span>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-top-0 p-4 pt-0">
                <button type="button" class="btn btn-light w-100 rounded-pill fw-bold border hover-bg transition-all" data-bs-dismiss="modal">Close Profile</button>
            </div>
        </div>
    </div>
</div>
