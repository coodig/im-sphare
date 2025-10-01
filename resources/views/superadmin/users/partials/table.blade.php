<table class="table table-hover table-bordered">
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
                    <button class="btn btn-secondary" data-bs-target="#showUserModal" data-bs-toggle="modal">Show</button>
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
</div>
