<!DOCTYPE html>
<html lang="id" class="bg-white">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- alpine.js if needed --}}
  {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>{{ $title }}</title>
</head>

<body>
  <x-navbar></x-navbar>
  <main class="font-monsterrat">
    {{ $slot }}
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
