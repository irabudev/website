@extends('errors::makeup')

{{-- @section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable Jeoh')) --}}

@section('title', __('Service Unavailable'))
@section('message', __('Be right back'))
@section('desc', __($exception->getMessage() ?: 'We are working on a better experience'))
