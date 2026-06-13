{{-- <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Centered vertically -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="addUserForm">
        <div class="modal-body">
          <div class="mb-3">
            <label>Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label>Role</label>
            <select class="form-select" name="role">
              <option value="user">User</option>
              <option value="superadmin">Super Admin</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">

            <div class="modal-header border-bottom-0 p-4 pb-2">
                <h5 class="modal-title fw-bold d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:user-plus-bold-duotone" class="text-success fs-3"></iconify-icon> Onboard New User
                </h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <form id="addUserForm">
                <div class="modal-body p-4 pt-2">

                    <div class="mb-3">
                        <label class="form-label text-secondary small fw-bold text-uppercase">Username</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:user-bold-duotone"></iconify-icon></span>
                            <input type="text" class="form-control bg-light border-0 px-2 shadow-none" name="username" placeholder="e.g. adarsh123" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary small fw-bold text-uppercase">Email Address</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:letter-bold-duotone"></iconify-icon></span>
                            <input type="email" class="form-control bg-light border-0 px-2 shadow-none" name="email" placeholder="name@sphare.com" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary small fw-bold text-uppercase">Assign Role</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:shield-check-bold-duotone"></iconify-icon></span>
                            <select class="form-select bg-light border-0 shadow-none" name="role" required>
                                <option value="" selected disabled>Select an access level...</option>
                                <option value="user">User (Standard Access)</option>
                                <option value="admin">Admin (Elevated Access)</option>
                                <option value="superadmin">Super Admin (Full Control)</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer border-top-0 p-4 pt-0">
                    <button type="button" class="btn btn-light rounded-pill fw-bold px-4 hover-bg transition-all border" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success fw-bold rounded-pill shadow-sm px-4 d-flex align-items-center gap-2">
                        <iconify-icon icon="solar:check-circle-bold-duotone"></iconify-icon> Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
