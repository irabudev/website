@extends('layout.default', [
'title' => 'Build to Simplify',
'description' => 'At irabu we craft SIMPLE & VALUABLE solutions to everday challengess.',
])

@section('content')

@include('pages.home.hero')

@include('pages.home.service')

@include('layout.partials.clients.v2')

@include('layout.partials.contact')

@endsection
