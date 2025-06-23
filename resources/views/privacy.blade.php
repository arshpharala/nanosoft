@extends('layouts.master')
@push('head')
    <link rel="stylesheet" href="{{ asset('/assets/style/contact.css') }}">
@endpush
@section('content')


@include('includes.contact', ['services' => services()])

@endsection
