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
