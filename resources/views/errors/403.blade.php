@extends('errors.layout')

@section('title', 'Access Denied')
@section('code', '403')

@section('message')
    Access <br> Denied
@endsection

@section('description')
    You don't have permission to view this page. Please contact your administrator if this is a mistake.
@endsection

@section('image')
    <iconify-icon icon="solar:shield-cross-bold-duotone" class="text-[12rem] text-white/90"></iconify-icon>
@endsection
