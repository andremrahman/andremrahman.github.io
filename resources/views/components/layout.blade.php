<!DOCTYPE html>
<html lang="id" class="bg-gray-200 overflow-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- alpine.js if needed --}}
  {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

  @vite('resources/css/app.css')
  <title>{{ $title }}</title>
</head>

<body>
  <x-navbar></x-navbar>
  <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    {{ $slot }}
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>

</html>
