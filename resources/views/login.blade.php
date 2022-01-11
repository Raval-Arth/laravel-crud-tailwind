@extends('layout.index')

@section('content')

<div>
  {{-- --------------------------------------------------------- --}}
  @if (Session::has('error_message'))
  <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
      <div>
        <p class="font-bold"> {{ Session::get('error_message') }}</p>

        <p class="text-sm">Please Fill carefully.</p>
      </div>
    </div>
  </div>
  @endif

  {{-- ------------------------------------------------------------ --}}
  @if (Session::has('message'))

  <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
      <div>
        <p class="font-bold"> {{ Session::get('message') }}</p>


        <p class="text-sm">Great Job.</p>
      </div>
    </div>
  </div>
  @endif

  <div class="text-4xl text-center">
    <h2>Login</h2>
  </div>
  <div class="mx-auto w-max flex my-10 py-10 px-10 items-center justify-center rounded-3xl border-2">


    <x-loginform />
  </div>

</div>

@stop
