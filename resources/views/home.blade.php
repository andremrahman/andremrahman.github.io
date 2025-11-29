<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <section id="hero"
    class="relative w-full min-h-screen overflow-hidden bg-black flex flex-col justify-between md:justify-center font-oswald">
    <!-- Gambar background -->
    <img src="{{ asset('img/hero.webp') }}" alt="Hero Image"
      class="absolute inset-0 w-full h-full object-cover object-[70%_100%] md:object-center md:mask-l-from-20% mask-b-from-90%" />

    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black/30 md:hidden"></div>

    <!-- Konten teks -->
    <div class="w-full">
      <div class="max-w-7xl mx-auto mt-22 px-4 sm:px-6 lg:px-8 uppercase">

        <div class="w-full md:w-1/2 relative z-10 flex flex-col items-start text-start h-full">
          <h1 class="text-base md:text-lg lg:text-xl">Welcome to</h1>
          <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-shadow-lg/50 hero-text">
            PT Gajahmada Karya Mandiri</h1>
          <p class="text-base md:text-lg lg:text-xl my-2">We Build
            More Than
            Structures — We Build Trust</p>
          <p class="text-lg md:text-xl lg:text-2xl font-light mt-2 md:mt-4 uppercase">
            From concept to completion, we build with precision, dedication, and care to bring your vision to life.
          </p>
        </div>
      </div>
    </div>

    {{-- button --}}
    <div class="w-full">
      <div class="max-w-7xl mx-auto pt-8 pb-16 px-4 sm:px-6 lg:px-8 flex justify-center md:justify-start">

        <a href="{{ route('services') }}"
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
            Discover Our Services
          </span>
        </a>
      </div>
    </div>

  </section>

  {{-- rail text --}}
  <div class="pt-20 py-20 md:pt-40 md:py-40 mask-x-from-70% mask-x-to-95% font-oswald uppercase">
    <div
      class="scrolling-text overflow-hidden min-h-1/5 w-full text-neutral-200 flex items-center shadow-[0_-1px_0_#000]">
      <div class="rail flex text-4xl md:text-6xl lg:text-7xl">
        <p class="rail-text whitespace-nowrap px-2 py-4">
          construct design foundation</p>
        <p class="rail-text whitespace-nowrap px-2 py-4">
          work build scaffolding blueprint</p>
        <p class="rail-text whitespace-nowrap px-2 py-4">
          plan site structure layout</p>
        <p class="rail-text whitespace-nowrap px-2 py-4">
          project develop architecture</p>
      </div>
    </div>
  </div>

  <section id="about" class="anim1-wrapper bg-neutral-800">
    <div class="cover"></div>
    <div class="reveal-line rounded-3xl"></div>
    <div class="content w-full">

      <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
          <div class="w-full md:w-1/2 order-2 md:order-1">
            <h2
              class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight title-anim perspective-normal font-poppins mb-4 border-t-2 inline-block"
              data-start="bottom 74%" data-end="bottom 85%">About Us
            </h2>
            <div class="text-base md:text-lg lg:text-xl text-start">
              <p class="split mb-4">
                <span>
                  Backed by strong technical expertise, <span class="font-bold">PT Gajahmada Karya Mandiri</span> has
                  led the planning and construction of factories, apartments, commercial buildings, hotels, hospitals,
                  piling
                  works,
                  and major infrastructure such as bridges, industrial estates, toll roads, highways, and flyovers.
                </span>
              </p>

              <p class="split mb-4">
                <span>
                  We are committed to delivering every project with exceptional quality, precision, and on-schedule
                  performance. Supported by an experienced professional team, we provide construction solutions that are
                  efficient, reliable, and built for long-term value.
                </span>
              </p>

              <p class="split mb-4">
                <span>
                  As a full-service general contractor, we handle end-to-end services, from planning and design to full
                  project
                  execution, including joint operations with trusted local and international partners.
                </span>
              </p>
            </div>
          </div>
          <img src="{{ asset('img/about.webp') }}" alt="About"
            class="w-full md:w-1/2 md:py-8 md:pl-6 lg:pl-8 object-cover md:max-lg:aspect-2/3 order-1 md:order-2 max-md:mb-8">
          </img>
        </div>
      </div>
  </section>

  <section id="vision-mission" class="bg-neutral-200 text-black ">
    <div class="w-full">
      <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">

        <div class="relative md:flex items-start">
          <div class="w-full md:w-1/2">
            <h2
              class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight title-anim perspective-normal font-poppins mb-4">
              Our Vision
            </h2>
          </div>

          <div class="w-full md:w-1/2 text-base md:text-lg lg:text-xl text-start">
            <p class="split mb-4">
              <span>
                We aim to become a leading and trusted construction company by delivering high-quality products and
                creating
                optimal
                value for customers, shareholders, employees, and society.
              </span>
            </p>
            <p class="split">
              <span>We are committed to supporting the nation’s development through both large and small-scale
                construction
                projects, ensuring customer satisfaction
                through consistent excellence in quality, on-time project
                completion, and cost efficiency, all supported by reliable
                human resources and the use of the most effective
                technologies.</span>
            </p>
          </div>
        </div>

        <hr class="my-16">

        <div class="relative md:flex items-start">
          <div class="w-full md:w-1/2">
            <h2
              class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight title-anim perspective-normal font-poppins mb-4">
              How We Bring Our Vision to Life
            </h2>
          </div>

          <div class="w-full md:w-1/2 text-base md:text-lg lg:text-xl text-start">
            <ul class="list-disc ml-6 md:ml-4">
              <li class="li-item">Ensuring client satisfaction</li>
              <li class="li-item">Continuous improvement of service quality</li>
              <li class="li-item">Clear and concise consultation services</li>
              <li class="li-item">On-time project completion</li>
              <li class="li-item">Informative communication</li>
              <li class="li-item">Compliance with client requirements and regulations</li>
              <li class="li-item">Skilled at identifying improvement opportunities</li>
              <li class="li-item">Planned education to enhance employee competence</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="team" class="bg-neutral-800">
    <div class="w-full">
      <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">

        <div class="relative md:flex items-center">
          <img src="{{ asset('img/team.webp') }}" alt="Team"
            class="w-full md:w-1/2 md:py-8 md:pr-6 lg:pr-8 object-cover object-center md:object-[55%_100%] md:max-lg:aspect-2/3 order-2 md:order-1 max-md:mb-8">
          </img>
          <div class="w-full md:w-1/2 order-1 md:order-2">
            <h2
              class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight title-anim perspective-normal font-poppins mb-4 border-t-2 inline-block">
              Our Team</h2>
            <p class="split mb-4">Our team is strongly committed to delivering every project with the highest level of
              expertise. We bring
              together
              professionals from various disciplines to ensure the quality we provide to our clients.
            </p>
            <p class="split mb-4">
              We continuously invest in our people by creating an environment that encourages growth and learning. With
              a
              responsive and solution-oriented approach, we aim to meet partner expectations both now and in the future.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="cta" class="relative min-h-[50vh] overflow-hidden flex items-center">
    <img src="{{ asset('img/cta.webp') }}" alt="Hero Image"
      class="absolute inset-0 w-full h-full object-cover object-[70%_40%] md:object-center" />
    <div class="w-full">
      <div class="mx-auto px-4 max-w-7xl py-16 md:py-32 sm:px-6 lg:px-8">
        <div class="relative">
          <h2
            class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight title-anim perspective-normal font-oswald mb-4 text-black">
            Ready to build something great?
          </h2>
          <a href="{{ route('contact') }}"
            class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-white transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-neutral-800 group font-oswald">
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
              Contact Us
            </span>
          </a>
        </div>
      </div>
    </div>

    </div>
  </section>



</x-layout>
