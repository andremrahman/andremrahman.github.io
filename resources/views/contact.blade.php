<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  @section('meta_description',
    Str::squish('Ready to start your next construction project? Contact PT Gajahmada Karya
    Mandiri directly for project consultations, inquiries, or media relations.'))

    <section
      class="min-h-[40vh] lg:min-h-[60vh] relative flex items-center justify-center bg-cover bg-position-[50%_30%] bg-fixed pt-16 overflow-x-hidden font-oswald"
      style="background-image: url({{ asset('img/contact.webp') }})">

      <!-- OVERLAY  -->
      <div class="absolute inset-0 bg-red-900 opacity-80"></div>

      <!-- text KNOCKOUT -->
      <div class="text-center p-8 z-20">
        <h1
          class="knockout-text bg-cover bg-position-[50%_30%] bg-fixed text-7xl md:text-[10rem] lg:text-[12rem] font-semibold leading-none tracking-tight"
          style="background-image: url({{ asset('img/contact.webp') }})">
          CONTACT
        </h1>

        <p class="text-neutral-300 text-xl md:text-2xl mt-4 max-w-2xl mx-auto z-30 relative">
          Get in touch and let’s move your project forward.
        </p>
      </div>
    </section>

    <section id="contact" class="bg-neutral-200 text-black">
      <div class="w-full">
        <div class="mx-auto px-4 max-w-7xl py-16 sm:px-6 lg:px-8 text-base">
          <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight perspective-normal font-poppins">
            Let's Get Started
          </h2>
          <p class="text-base md:text-lg mb-4">
            Have a project in mind? Let’s talk about how we can help.
          </p>

          <div class="flex flex-wrap lg:flex-nowrap gap-4 text-white text-lg">
            <div class="basis-full md:basis-[calc(50%-0.5rem)] bg-neutral-800 rounded-md p-4">
              <h2 class="font-semibold mb-2 text-xl">Contact Details</h2>
              <div class="flex">
                <svg class="shrink-0" width="28px" height="28px" viewBox="0 0 24.00 24.00" fill="none"
                  xmlns="http://www.w3.org/2000/svg" stroke="#000" stroke-width="0.192">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z"
                      fill="#fff"></path>
                  </g>
                </svg>
                <p class="ml-2">+62 8113232102</p>
              </div>
              <div class="flex items-center">
                <svg class="shrink-0" width="28px" height="28px" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z"
                      fill="#fff"></path>
                  </g>
                </svg>
                <p class="mb-0.5 ml-2">info@gajahmada.asia</p>
              </div>

              <div class="flex items-center">
                <svg class="shrink-0" width="28px" height="28px" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z"
                      fill="#fff"></path>
                  </g>
                </svg>
                <p class="mb-0.5 ml-2">ceo@gajahmada.asia</p>
              </div>
            </div>

            <div class="basis-full md:basis-[calc(50%-0.5rem)] bg-neutral-800 rounded-md p-4">
              <div class="flex">
                <h2 class="font-semibold mb-2 text-xl">Address</h2>
              </div>
              <p class="">
                Lucky Garden Blok A No.8, Seraya Batu Ampar, Kepulauan Riau, Indonesia, 29444
              </p>
            </div>

            <div class="basis-full md:basis-[calc(50%-0.5rem)] mx-auto  bg-neutral-800 rounded-md p-4">
              <h2 class="font-semibold mb-2 text-xl">Meet Us on Maps</h2>
              <div class="aspect-4/3">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d708.948699606382!2d104.01519305582717!3d1.1513008134803364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9898ef442493f%3A0x884c0674a82335f4!2sPerumahan%20Lucky%20Garden!5e0!3m2!1sid!2sid!4v1764328821121!5m2!1sid!2sid"
                  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-layout>
