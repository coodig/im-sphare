@extends('errors::minimal')

@section('title', __('Not Found'))
{{-- @section('code', '404') --}}
{{-- @section('message', __('Not Found')) --}}

@section('image')
    <img src="{{ asset('asset/error/404.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
