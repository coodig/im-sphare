@extends('errors.layout')

@section('title', 'Maintenance')
@section('code', '503')

@section('message')
    We'll be <br> back soon
@endsection

@section('description')
    We are performing scheduled maintenance to improve our services. Please check back in a few minutes.
@endsection

@section('image')
    <iconify-icon icon="solar:traffic-cone-bold-duotone" class="text-[12rem] text-white/90"></iconify-icon>
@endsection
