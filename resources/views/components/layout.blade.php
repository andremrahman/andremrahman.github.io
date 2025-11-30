<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="{{ asset('css/gsap-section.css') }}">
  <link rel="stylesheet" href="{{ asset('css/gsap-slider.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>{{ $title }}</title>
</head>

<body class="overflow-x-hidden text-white bg-black">
  <x-navbar></x-navbar>
  <main class="font-montserrat">
    {{ $slot }}
  </main>

  <x-footer></x-footer>

  {{-- gsap --}}
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>

  {{-- <script src="{{ asset('js/gsap-hero-text.js') }}"></script>
  <script src="{{ asset('js/gsap-section.js') }}"></script>
  <script src="{{ asset('js/gsap-text-scroll-roll.js') }}"></script>
  <script src="{{ asset('js/gsap-split-text-title.js') }}"></script>
  <script src="{{ asset('js/gsap-split-text.js') }}"></script> --}}
  <script type="module" src="{{ asset('js/gsap-slider.js') }}"></script>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
