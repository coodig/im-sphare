@extends('errors::minimal')

@section('title', __('Payment Required'))
{{-- @section('code', '402')
@section('message', __('Payment Required')) --}}

@section('image')
    <img src="{{ asset('asset/error/402.svg') }}" alt="404 Not Found" style="width:500px;">
@endsection
