@extends('errors.layout')

@section('title', 'Page Not Found')
@section('code', '404')

@section('message')
    Lost in <br> Space?
@endsection

@section('description')
    Oops! The page you are looking for doesn't exist. It might have been moved or deleted.
@endsection

@section('image')
    <iconify-icon icon="solar:ufo-3-bold-duotone" class="text-[12rem] text-white/90"></iconify-icon>
@endsection
