@extends('errors::minimal')

@section('title', __('Page Expired'))
{{-- @section('code', '419')
@section('message', __('Page Expired')) --}}

@section('image')
    <img src="{{ asset('asset/error/419.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
