@extends('superadmin.layouts.app') {{-- use your admin layout --}}

@section('superadmin-content')
    <div class="container py-3">
        <h1>Users List</h1>

        <div class="controls mb-3 row">
            <div class="search">
                <form action="">
                    <input type="text" placeholder="Search Users" class="form-control">
                </form>
            </div>


            <div class="filter-role" id="filter-role">
                <select name="filter-role">
                    <option value="role">Role</option>
                    <option value="user">User</option>
                    <option value="superadmin">Super Admin</option>
                </select>
            </div>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">QR</th>
                    <th scope="col">Show</th>
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
                                target="_blank">show</a>
                        </td>
                        <td>
                            <a href="{{route('profile.show', ['username' => Auth::user()])}}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
