@extends('layout.index')

@section('content')
<main>
  <div class="row">
    <div class="py-4 col-6 mx-auto order-md-last">

      <div class="text-4xl text-center">
        <h2>Register</h2>
      </div>

      <div class="mx-auto w-max flex my-10 py-10 px-10 items-center justify-center rounded-3xl border-2">
        <x-registration-form />
      </div>
    </div>
  </div>
</main>
@stop
