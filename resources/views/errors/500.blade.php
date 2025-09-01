@extends('errors::minimal')

@section('title', __('Server Error'))
{{-- @section('code', '500')
@section('message', __('Server Error')) --}}


@section('image')
    <img src="{{ asset('asset/error/500.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
