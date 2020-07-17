@extends('layout.default', [
'title' => __('Build to simplify'),
'description' => __('At irabu we craft SIMPLE & VALUABLE solutions to everday challengess.'),
])

@section('content')

@include('pages.home.hero')

@include('pages.home.service')

@include('layout.partials.clients.v2')

@include('layout.partials.contact')

@endsection
