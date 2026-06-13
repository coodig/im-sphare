@extends('superadmin.layouts.app') {{-- use your admin layout --}}

@section('superadmin-content')
    <div class="container py-3">
        <h1 class="mb-3">Users List</h1>


        @include('superadmin.users.partials.controls')

        <div id="users-table">
            @include('superadmin.users.partials.table')
        </div>

        @include('superadmin.users.modals.add')
        @include('superadmin.users.modals.edit')
        @include('superadmin.users.modals.delete')
        @include('superadmin.users.modals.show')

    </div>
@endsection
{{--
@section('scripts')

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.show-user-btn').forEach(button => {
                button.addEventListener('click', function () {
                    let userId = this.getAttribute('data-id');

                    document.getElementById('showUserId').innerText = "loading..";

                    fetch(`/superadmin/users/${userId}`).then(Response => Response.json()).then(data => {
                        document.getElementById('showUserId').innerText = data.id;
                        // document.getElementById('showUsername').innerText = data.username;
                        document.getElementById('showEmail').innerText = data.email;
                        document.getElementById('showRole').innerText = data.role;
                    })
                })
            });
        })
    </script>
@endsection --}}


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.querySelectorAll('.show-user-btn').forEach(button => {
                button.addEventListener('click', function () {
                    let userId = this.getAttribute('data-id');

                    // Modal ko loading state mein daalo
                    document.getElementById('showUserId').innerText = "Loading...";
                    document.getElementById('showUsername').innerText = "Loading...";
                    document.getElementById('showEmail').innerText = "Loading...";
                    document.getElementById('showRole').innerText = "Loading...";

                    // 🔥 Bug 1 Fixed: Backticks (``) use kiye hain
                    fetch(`/superadmin/users/${userId}`)
                        .then(response => response.json()) // 'response' likhna better practice hai
                        .then(data => {
                            document.getElementById('showUserId').innerText = data.id;

                            // 🔥 Bug 2 Fixed: small 'n' in showUsername
                            document.getElementById('showUsername').innerText = data.username;

                            document.getElementById('showEmail').innerText = data.email;

                            // 🔥 Bug 3 Fixed: data.role instead of data.role_id
                            document.getElementById('showRole').innerText = data.role;
                        })
                        .catch(error => {
                            console.error('Error fetching user data:', error);
                            document.getElementById('showUserId').innerText = "Error!";
                        });
                });
            });

        });
    </script>
@endsection
