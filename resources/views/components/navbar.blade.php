<nav class="fixed top-0 left-0 w-full z-50 bg-black/70 backdrop-blur text-poppins">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Hamburger menu button-->
        <button type="button" id="btn-hamburger"
          class="relative inline-flex items-center justify-center rounded-md p-2 hamburger">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 64 48">
            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
          </svg>
        </button>
        {{-- <button class="hamburger">
          <svg viewBox="0 0 64 48">
            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
          </svg>
        </button> --}}
      </div>

      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center sm:mr-auto">
          <a href="/">
            <img src="img/logo.png" alt="GKM Logo" class="h-8 w-auto" />
          </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/services" :active="request()->is('services')">Services</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="mobile-menu" class="overflow-hidden max-h-0 transition-all duration-300 ease-in-out sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <x-mobile-nav-link href="/" :active="request()->is('/')">Home</x-mobile-nav-link>
      <x-mobile-nav-link href="/services" :active="request()->is('services')">Services</x-mobile-nav-link>
      <x-mobile-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-mobile-nav-link>
    </div>
  </div>

</nav>
