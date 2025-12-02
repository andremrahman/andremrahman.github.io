<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  @section('meta_description',
    Str::squish('Discover PT Gajahmada Karya Mandiri comprehensive general contractor services, specializing in
    civil, building, and EPC projects. Quality and safety assured.'))

    <section
      class="min-h-[40vh] lg:min-h-[60vh] relative flex items-center justify-center bg-cover bg-position-[50%_30%] bg-fixed mt-16 overflow-x-hidden font-oswald"
      style="background-image: url({{ asset('img/services.webp') }})">

      <!-- OVERLAY  -->
      <div class="absolute inset-0 bg-neutral-900 opacity-80"></div>

      <!-- text KNOCKOUT -->
      <div class="text-center p-8 z-20">
        <h1
          class="knockout-text bg-cover bg-position-[50%_30%] bg-fixed text-7xl md:text-[10rem] lg:text-[12rem] font-semibold leading-none tracking-tight"
          style="background-image: url({{ asset('img/services.webp') }})">
          SERVICES
        </h1>

        <p class="text-neutral-300 text-xl md:text-2xl mt-4 max-w-2xl mx-auto z-30 relative">
          Professional services to support your project needs.
        </p>
      </div>
    </section>

    <section id="services" class="bg-neutral-200 text-black">
      <div class="w-full">
        <div class="mx-auto px-4 max-w-7xl py-16 sm:px-6 lg:px-8 text-base">
          <div class="flex flex-col lg:flex-row">
            <div class="relative w-full lg:w-2/5">
              <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight perspective-normal font-poppins mb-4">
                Our Services
              </h2>
              <p class="split">
                Your project deserves trusted hands. Our comprehensive services bring together experience, technology, and
                commitment to excellence. Discover the key services we proudly deliver:
              </p>
              <ul class="list-disc *:ml-6 font-semibold mt-2">
                <li class="li-item">Spatial and Regional Planning</li>
                <li class="li-item">Architecture</li>
                <li class="li-item">Civil / Structural</li>
                <li class="li-item">Road Engineering</li>
                <li class="li-item">Bridge Engineering</li>
                <li class="li-item">Geotechnical</li>
                <li class="li-item">Mechanical</li>
                <li class="li-item">Electrical</li>
                <li class="li-item">Plumbing</li>
                <li class="li-item">Other related services.</li>
              </ul>
            </div>

            {{-- ? slider --}}
            <div class="relative w-full lg:w-3/5 lg:self-end">
              <div id="slider-container"
                class="relative aspect-4/3 md:aspect-3/2 w-full md:max-w-2xl mx-auto flex items-center justify-center rounded-2xl mt-20 md:mt-10">

                <button id="prevBtn"
                  class="absolute left-0 z-10 bg-black/30 text-white p-3 rounded-full transition duration-300 hover:bg-black/50 hover:scale-105 active:bg-black/50 active:scale-105 transform -translate-y-1/2 top-1/2 backdrop-blur-sm border border-white/30">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                  </svg>
                </button>

                <div id="stack" class="relative w-full h-full flex justify-center items-center font-oswald">

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="0"
                    style="background-image: url({{ asset('img/slider/slide1.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Spatial and Regional Planning</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="1"
                    style="background-image: url({{ asset('img/slider/slide2.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Architecture</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="2"
                    style="background-image: url({{ asset('img/slider/slide3.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Civil / Structural</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="3"
                    style="background-image: url({{ asset('img/slider/slide4.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Road Engineering</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="4"
                    style="background-image: url({{ asset('img/slider/slide5.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Bridge Engineering</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="5"
                    style="background-image: url({{ asset('img/slider/slide6.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Geotechnical</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="6"
                    style="background-image: url({{ asset('img/slider/slide7.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Electrical and Mechanical</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="7"
                    style="background-image: url({{ asset('img/slider/slide8.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Plumbing</p>
                    </div>
                  </div>

                  <div class="slide w-11/12 h-5/6 rounded-xl shadow-lg" data-index="8"
                    style="background-image: url({{ asset('img/slider/slide9.webp') }})">
                    <div class="slide-content relative z-10 p-6 text-white">
                      <p class="text-2xl md:text-4xl font-semibold mb-1 drop-shadow-md">Other related services</p>
                    </div>
                  </div>

                </div>

                <button id="nextBtn"
                  class="absolute right-0 z-10 bg-black/30 text-white p-3 rounded-full transition duration-300 hover:bg-black/50 hover:scale-105 active:bg-black/50 active:scale-105 transform -translate-y-1/2 top-1/2 backdrop-blur-sm border border-white/30">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- cta --}}
    <section class="relative min-h-[50vh] overflow-x-hidden flex items-center font-oswald">
      <img src="{{ asset('img/cta2.webp') }}" alt="call to action"
        class="absolute inset-0 w-full h-full object-cover object-center md:object-center" />
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="w-full">
        <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">
          <div class="relative">
            <h2 class="text-4xl md:text-6xl lg:text-7xl leading-tight perspective-normal text-white">
              Your next great project starts here.
            </h2>
            <p class="mb-4 text-lg md:text-2xl"> Expert guidance for every step of your project.
            </p>
            <a href="{{ route('contact') }}"
              class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-black transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-neutral-200 group">
              <span
                class="absolute bottom-0 left-0 w-full h-1 transition-all duration-100 ease-in-out bg-merah group-hover:h-full group-active:h-full"></span>
              <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
              <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </span>
              <span
                class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white group-active:text-white">
                Get In Touch
              </span>
            </a>
          </div>
        </div>
      </div>

      </div>
    </section>

    @push('scripts')
      <script src="{{ asset('js/vendor/ScrollTrigger.min.js') }}"></script>
      <script src="{{ asset('js/vendor/SplitText.min.js') }}"></script>

      <script src="{{ asset('js/gsap-slider.js') }}"></script>
      <script src="{{ asset('js/gsap-split-text.js') }}"></script>
    @endpush
  </x-layout>
