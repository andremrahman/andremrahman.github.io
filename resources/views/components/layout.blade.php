<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite(['resources/css/app.css'])
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

  {{-- ? preload css --}}
  <link rel="stylesheet" href="{{ asset('css/preload.css') }}">

  <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">

  {{-- gsap --}}
  <link rel="stylesheet" href="{{ asset('css/gsap-section.css') }}">
  <link rel="stylesheet" href="{{ asset('css/gsap-slider.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>{{ $title }}</title>
  <meta name="description" content="@yield('meta_description', 'PT Gajahmada Karya Mandiri is a full-service general contractor leading the planning and construction of major infrastructure, commercial buildings, and residential projects.')">
  <link rel="canonical" href="https://gajahmada.asia/">
</head>

<body class="overflow-x-hidden text-white bg-black no-scroll">

  {{-- ? preload animation --}}
  <x-preload></x-preload>

  <x-navbar></x-navbar>
  <main class="font-montserrat">
    {{ $slot }}
  </main>

  <x-footer></x-footer>

  {{-- gsap global --}}
  <script src="{{ asset('js/vendor/gsap.min.js') }}"></script>

  {{-- script js preload --}}
  <script src="{{ asset('js/preload.js') }}"></script>

  {{-- scripts tambahan per halaman utk gsap --}}
  @stack('scripts')

  {{-- script js global --}}
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
