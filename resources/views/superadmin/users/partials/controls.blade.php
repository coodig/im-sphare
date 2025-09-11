<div class="controls mb-3 d-flex justify-content-between flex-row">
    <span class="search">
        <form action="">
            <input type="text" placeholder="Search Users" class="form-control">
        </form>
    </span>


  <span class="filter-role" id="filter-role">
    <select name="filter-role" id="filter-role-select" class="form-select">
        <option value="" disabled selected>Select Role</option>
        <option value="user">User</option>
        <option value="superadmin">Super Admin</option>
    </select>
</span>


    <span class="add">
        {{-- <button id="add-user">Add User</button> --}}
        {{-- <a href="" class="btn btn-primary">Add User</a> --}}
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
            Add User
        </button>
    </span>
</div>
