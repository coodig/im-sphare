{{-- <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">QR</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div class="p-2 text-white rounded-1">
                        {{QrCode::size(75)->generate($user->username . '|' . $user->id . '|' . $user->email)}}
                    </div>
                </td>
                <td>
                    <button class="btn btn-secondary  show-user-btn" data-bs-target="#showUserModal" data-bs-toggle="modal" data-id="{{ $user->id }}">Show</button>
                </td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal">
                        Edit
                    </button>
                </td>
                <td>
                    <form action="{{route('superadmin.delete.user', [$user->id])}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" data-bs-toogle="modal"
                            data-bs-target="#deleteUserModal">Delete</button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination-links">
    <span class="align-items-center text-center" id="pagination-links">{{ $users->links() }}</span>
</div>

<div>
    <button id="unique-btn"> unique button </button>
</div> --}}


<div class="table-responsive custom-scrollbar">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col" class="ps-4 text-secondary small text-uppercase py-3">User Details</th>
                <th scope="col" class="text-secondary small text-uppercase py-3">Security Role</th>
                <th scope="col" class="text-secondary small text-uppercase py-3 text-center">Auth QR</th>
                <th scope="col" class="pe-4 text-secondary small text-uppercase py-3 text-end">Actions</th>
            </tr>
        </thead>
        <tbody class="border-top-0">
            @forelse ($users as $user)
                <tr class="hover-bg transition-all">
                    <td class="ps-4 py-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="position-relative">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->username) }}&background=f1f5f9&color=0f172a&bold=true" width="46" height="46" class="rounded-circle shadow-sm border">
                                <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-2 border-white rounded-circle" title="Active"></span>
                            </div>
                            <div class="lh-sm">
                                <span class="d-block fw-bold text-dark fs-6">{{ $user->username }}</span>
                                <span class="d-block text-secondary mt-1" style="font-size: 0.8rem;">{{ $user->email }}</span>
                                <span class="text-muted font-monospace" style="font-size: 0.7rem;">ID: #{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}</span>
                            </div>
                        </div>
                    </td>

                    <td class="py-3">
                        @if(strtolower($user->role) === 'superadmin')
                            <span class="badge bg-danger-subtle text-danger rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-1" style="letter-spacing: 0.5px;">
                                <iconify-icon icon="solar:crown-star-bold-duotone" class="fs-6"></iconify-icon> SUPER ADMIN
                            </span>
                        @elseif(strtolower($user->role) === 'admin')
                            <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-1" style="letter-spacing: 0.5px;">
                                <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-6"></iconify-icon> ADMIN
                            </span>
                        @else
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-1" style="letter-spacing: 0.5px;">
                                <iconify-icon icon="solar:user-rounded-bold-duotone" class="fs-6"></iconify-icon> USER
                            </span>
                        @endif
                    </td>

                    <td class="py-3 text-center">
                        <div class="d-inline-block p-1 bg-white border rounded-3 shadow-sm qr-wrapper transition-all cursor-pointer" title="Scan for Quick Auth">
                            {{ QrCode::size(50)->generate($user->username . '|' . $user->id . '|' . $user->email) }}
                        </div>
                    </td>

                    <td class="pe-4 py-3 text-end">
                        <div class="d-inline-flex gap-2">
                            <button class="btn btn-light btn-sm text-primary border-0 shadow-sm d-flex align-items-center justify-content-center show-user-btn icon-hover" data-bs-target="#showUserModal" data-bs-toggle="modal" data-id="{{ $user->id }}" style="width: 36px; height: 36px;" title="View Details">
                                <iconify-icon icon="solar:eye-bold-duotone" class="fs-5"></iconify-icon>
                            </button>

                            <button class="btn btn-light btn-sm text-warning-emphasis border-0 shadow-sm d-flex align-items-center justify-content-center edit-user-btn icon-hover" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="{{ $user->id }}" style="width: 36px; height: 36px;" title="Edit User">
                                <iconify-icon icon="solar:pen-bold-duotone" class="fs-5"></iconify-icon>
                            </button>

                            <form action="{{ route('superadmin.delete.user', [$user->id]) }}" method="POST" class="m-0 p-0">
                                @csrf
                                <button type="button" class="btn btn-light btn-sm text-danger border-0 shadow-sm d-flex align-items-center justify-content-center delete-user-btn hover-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal" data-id="{{ $user->id }}" style="width: 36px; height: 36px;" title="Delete User">
                                    <iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="fs-5"></iconify-icon>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-5 text-secondary">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-1 text-muted mb-3 d-block"></iconify-icon>
                        <h6 class="fw-bold text-dark">No users found</h6>
                        <p class="small mb-0">Start by adding a new user to the ecosystem.</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-between align-items-center p-4 bg-white border-top">
    <div class="text-secondary small fw-medium">
        Showing directory records
    </div>
    <div class="pagination-links m-0" id="pagination-links">
        {{ $users->links() }}
    </div>
</div>
