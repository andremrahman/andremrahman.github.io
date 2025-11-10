<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- alpine.js if needed --}}
  {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">

  {{-- gsap --}}
  <link rel="stylesheet" href="{{ asset('css/style-gsap.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>{{ $title }}</title>
</head>

<body>
  <x-navbar></x-navbar>
  <main class="font-montserrat">
    {{ $slot }}
  </main>

  {{-- gsap --}}
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/smooth-scrollbar@8.7.1/dist/smooth-scrollbar.js"></script>


  <script src="{{ asset('js/script-gsap.js') }}"></script>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
