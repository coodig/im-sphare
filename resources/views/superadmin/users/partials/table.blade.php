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
                    <a href="{{route('profile.show', ['username' => Auth::user()])}}" class="btn btn-dark"
                        target="_blank">Show</a>
                </td>
                <td>

                    <a href="{{route('profile.show', ['username' => Auth::user()])}}" class="btn btn-warning"
                        target="_blank">Edit</a>
                </td>

                <td>
                {{-- <a href="{{route('profile.show', ['username' => Auth::user()])}}" class="btn btn-danger">Delete</a>
                --}}
                <form action="{{route('superadmin.delete.user',[$user->id])}}" method="POST">
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
