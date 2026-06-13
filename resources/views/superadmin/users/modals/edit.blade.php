{{-- <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="editUserForm">
        @csrf
        <input type="hidden" name="id" id="editUserId">
        <div class="modal-body">
          <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" id="editUsername" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="editEmail" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Role</label>
            <select name="role" id="editRole" class="form-select">
              <option value="user">User</option>
              <option value="superadmin">Super Admin</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Update</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}


<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">

            <div class="modal-header border-bottom-0 p-4 pb-2">
                <h5 class="modal-title fw-bold d-flex align-items-center gap-2">
                    <iconify-icon icon="solar:pen-new-square-bold-duotone" class="text-warning-emphasis fs-3"></iconify-icon> Update Profile
                </h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <form id="editUserForm">
                @csrf
                <input type="hidden" name="id" id="editUserId">

                <div class="modal-body p-4 pt-2">
                    <div class="mb-3">
                        <label class="form-label text-secondary small fw-bold text-uppercase">Username</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:user-bold-duotone"></iconify-icon></span>
                            <input type="text" name="username" id="editUsername" class="form-control bg-light border-0 px-2 shadow-none" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary small fw-bold text-uppercase">Email Address</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:letter-bold-duotone"></iconify-icon></span>
                            <input type="email" name="email" id="editEmail" class="form-control bg-light border-0 px-2 shadow-none" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary small fw-bold text-uppercase">System Role</label>
                        <div class="input-group shadow-sm rounded-3 overflow-hidden">
                            <span class="input-group-text bg-light border-0 text-secondary"><iconify-icon icon="solar:shield-check-bold-duotone"></iconify-icon></span>
                            <select name="role" id="editRole" class="form-select bg-light border-0 shadow-none">
                                <option value="user">User (Standard Access)</option>
                                <option value="admin">Admin (Elevated Access)</option>
                                <option value="superadmin">Super Admin (Full Control)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0 p-4 pt-0">
                    <button type="button" class="btn btn-light rounded-pill fw-bold px-4 hover-bg transition-all border" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning fw-bold rounded-pill shadow-sm px-4 text-dark d-flex align-items-center gap-2">
                        <iconify-icon icon="solar:diskette-bold-duotone"></iconify-icon> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
