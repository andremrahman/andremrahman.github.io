{{-- $attributes untuk menarik attributes dari x-nav-link --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
  class="{{ $active ? 'bg-zinc-400/50 text-white hover:text-black rounded-sm' : 'text-gray-300 hover:text-black' }} relative inline-flex items-center justify-center px-3 py-2 text-sm font-medium overflow-hidden tracking-tighter rounded-sm group active:text-black">
  <span
    class="absolute w-0 h-0 transition-all duration-500 ease-out bg-zinc-200 rounded-full group-hover:w-56 group-hover:h-56 group-active:w-56 group-active:h-56"></span>
  <span class="relative">{{ $slot }}</span>
</a>
