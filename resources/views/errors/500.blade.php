@extends('errors.layout')

@section('title', 'Server Error')
@section('code', '500')

@section('message')
    Internal <br> Error
@endsection

@section('description')
    Something went wrong on our servers. We are currently working to fix this issue.
@endsection

@section('image')
    <iconify-icon icon="solar:server-square-bold-duotone" class="text-[12rem] text-white/90"></iconify-icon>
@endsection
