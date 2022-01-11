@extends('layout/index')

@section('content')

<x-header />
<body class="">
  @if (Session::has('message'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('message') }}
  </div>
  @endif

  <div class="w-11/12 mx-auto">
    <x-hero />

  </div>
@stop