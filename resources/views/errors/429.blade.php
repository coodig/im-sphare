@extends('errors::minimal')

@section('title', __('Too Many Requests'))
{{-- @section('code', '429')
@section('message', __('Too Many Requests')) --}}


@section('image')
    <img src="{{ asset('asset/error/429.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
