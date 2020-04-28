@extends('layout.default', [
'title' => 'Building to Simplify',
'description' => 'At irabu we craft SIMPLE & VALUABLE solutions to everday challengess.',
])

@section('content')

@include('pages.home.hero')

@include('pages.home.service')

@include('pages.home.wedo')

@include('pages.home.clients')

@include('layout.partials.contact')


@endsection
