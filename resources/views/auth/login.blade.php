@extends('layouts.auth')

@section('content')

    <x-login-form action="{{ route('login') }}" method="POST"/>

@endsection
