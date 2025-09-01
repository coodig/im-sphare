@extends('errors::minimal')

@section('title', __('Service Unavailable'))
{{-- @section('code', '503')
@section('message', __('Service Unavailable')) --}}

@section('image')
    <img src="{{ asset('asset/error/503.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
