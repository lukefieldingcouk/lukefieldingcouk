@extends('templates.layout')

@section('content')

    @include('templates.form.testform')

    @if (session('status'))
    @include('templates.form.successmessage')
    @endif

@endsection