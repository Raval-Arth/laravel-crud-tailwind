<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{-- @include('../c/header') --}}
<x-header />

<body class="bg-light">

  <div class="container">
    @include('../layout/navbar')
    @yield('content')
    @include('../layout/footer')
  </div>
</body>

</html>
