{{-- $attributes untuk menarik attributes dari x-nav-link --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
  class="{{ $active ? 'bg-gray-950/50 text-white rounded-md' : 'text-gray-300 hover:text-white' }} relative inline-flex items-center justify-center px-3 py-2 text-sm font-medium overflow-hidden tracking-tighter rounded-lg group">
  <span
    class="absolute w-0 h-0 transition-all duration-500 ease-out bg-gray-950/50 rounded-full group-hover:w-56 group-hover:h-56"></span>
  <span
    class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-linear-to-b from-transparent via-transparent to-gray-700"></span>
  <span class="relative">{{ $slot }}</span>
</a>
