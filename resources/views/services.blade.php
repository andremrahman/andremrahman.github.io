<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- ! google --}}
  <section
    class="min-h-[40vh] lg:min-h-[60vh] relative flex items-center justify-center bg-knockout-image mt-16 overflow-x-hidden font-oswald">

    <!-- 1. OVERLAY GELAP (BG-GRAY-900 opacity-80) untuk Kontras Maksimal -->
    <div class="absolute inset-0 bg-neutral-900 opacity-50"></div>

    <!-- 2. TEKS KNOCKOUT DI TENGAH -->
    <div class="text-center p-8 z-20">
      <!-- Teks knockout dengan efek tembus pandang -->
      <h1 class="knockout-text text-7xl md:text-[10rem] lg:text-[12rem] font-semibold leading-none tracking-tight">
        SERVICES
      </h1>
      <!-- Teks pendamping berwarna terang agar terlihat jelas di atas overlay gelap -->
      <p class="text-neutral-300 text-xl md:text-2xl mt-4 max-w-2xl mx-auto z-30 relative">
        Your project deserves trusted hands. Our comprehensive services bring together experience, technology, and
        commitment to excellence.
      </p>
    </div>
  </section>









  {{-- <div class="backdrop">
    <p class="knockout-text">Taitō</p>
  </div> --}}










  {{-- <section id="services" class="min-h-screen">
    <img src="{{ asset('img/services.webp') }}" alt="Services"
      class="absolute inset-0 top-16 w-full h-full object-cover object-[50%_30%] max-h-[40vh] lg:max-h-[60vh]" />
    
  </section> --}}

</x-layout>
