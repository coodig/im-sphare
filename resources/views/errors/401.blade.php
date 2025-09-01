@extends('errors::minimal')

@section('title', __('Unauthorized'))
{{-- @section('code', '401')
@section('message', __('Unauthorized')) --}}

@section('image')
    <img src="{{ asset('asset/error/401.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
