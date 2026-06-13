{{-- <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="deleteUserForm">
        @csrf
        <input type="hidden" name="id" id="deleteUserId">
        <div class="modal-body">
          <p>Are you sure you want to delete this user?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Yes, Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-0 shadow-lg rounded-4 text-center overflow-hidden">

            <div class="modal-header border-bottom-0 pb-0 justify-content-end">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <form id="deleteUserForm" method="POST">
                @csrf
                <input type="hidden" name="id" id="deleteUserId">

                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-circle mb-3" style="width: 70px; height: 70px;">
                        <iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="fs-1"></iconify-icon>
                    </div>

                    <h4 class="fw-bold mb-2 text-dark">Delete User?</h4>
                    <p class="text-secondary small mb-0 lh-sm">
                        Are you sure you want to permanently remove this user from the imSphare ecosystem? <strong class="text-danger">This action cannot be undone.</strong>
                    </p>
                </div>

                <div class="modal-footer border-top-0 p-4 pt-0 d-flex flex-column gap-2 bg-light bg-opacity-50">
                    <button type="submit" class="btn btn-danger w-100 rounded-pill fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2">
                        <iconify-icon icon="solar:danger-triangle-bold-duotone"></iconify-icon> Yes, Delete Permanently
                    </button>
                    <button type="button" class="btn btn-light w-100 rounded-pill fw-bold border hover-bg transition-all m-0" data-bs-dismiss="modal">Cancel & Keep User</button>
                </div>
            </form>

        </div>
    </div>
</div>
