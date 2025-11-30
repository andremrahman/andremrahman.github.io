<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="h-screen"></section>

  <section>

    <div class="w-full">
      <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">

        <div id="slider-container"
          class="relative h-[50vh] max-h-[500px] w-full max-w-3xl mx-auto flex items-center justify-center rounded-2xl shadow-2xl bg-gray-800">

          <button id="prevBtn"
            class="absolute left-4 z-50 bg-white/20 text-white p-3 rounded-full transition duration-300 hover:bg-white/40 hover:scale-105 transform -translate-y-1/2 top-1/2 backdrop-blur-sm border border-white/30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
            </svg>
          </button>

          <div id="stack" class="relative w-full h-full flex justify-center items-center">

            <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="0" data-color="#EF4444"
              style="background-image: url(https://picsum.photos/id/237/600/400)">
              <div class="slide-content relative z-10 p-6 text-white">
                <p class="text-3xl font-extrabold mb-1 drop-shadow-md">Project Alpha</p>
                <p class="text-lg font-light drop-shadow-sm">Ini adalah kartu utama yang terlihat.</p>
              </div>
            </div>

            <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="1" data-color="#F59E0B"
              style="background-image: url(https://picsum.photos/id/1018/600/400)">
              <div class="slide-content relative z-10 p-6 text-white">
                <p class="text-3xl font-extrabold mb-1 drop-shadow-md">Yellow Profile</p>
                <p class="text-lg font-light drop-shadow-sm">Kartu ini berada tepat di belakang yang pertama.</p>
              </div>
            </div>

            <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="2" data-color="#10B981"
              style="background-image: url(https://picsum.photos/id/1025/600/400)">
              <div class="slide-content relative z-10 p-6 text-white">
                <p class="text-3xl font-extrabold mb-1 drop-shadow-md">Green Design</p>
                <p class="text-lg font-light drop-shadow-sm">Tampilan minimalis dengan efek tumpukan yang dinamis.</p>
              </div>
            </div>

            <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="3" data-color="#3B82F6"
              style="background-image: url({{ asset('img/about.webp') }}">
              <div class="slide-content relative z-10 p-6 text-white">
                <p class="text-3xl font-extrabold mb-1 drop-shadow-md">Blue Concept</p>
                <p class="text-lg font-light drop-shadow-sm">GSAP mengontrol skala, posisi Y, dan z-index.</p>
              </div>
            </div>

            <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="4" data-color="#6366F1"
              style="background-image: url(https://picsum.photos/id/1000/600/400)">
              <div class="slide-content relative z-10 p-6 text-white">
                <p class="text-3xl font-extrabold mb-1 drop-shadow-md">Indigo Flow</p>
                <p class="text-lg font-light drop-shadow-sm">Selamat menikmati slider GSAP baru Anda!</p>
              </div>
            </div>

          </div>

          <button id="nextBtn"
            class="absolute right-4 z-50 bg-white/20 text-white p-3 rounded-full transition duration-300 hover:bg-white/40 hover:scale-105 transform -translate-y-1/2 top-1/2 backdrop-blur-sm border border-white/30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
          </button>

        </div>
      </div>
    </div>
  </section>




  <div class="h-screen bg-blue-500"></div>
</x-layout>
