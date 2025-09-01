@extends('errors::minimal')

@section('title', __('Forbidden'))
{{-- @section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}

@section('image')
    <img src="{{ asset('asset/error/403.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
