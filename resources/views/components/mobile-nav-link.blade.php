{{-- $attributes untuk menarik attributes dari x-mobile-nav-link --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
  class="{{ $active ? 'bg-zinc-400/50 text-white rounded-md' : 'text-gray-300 hover:bg-zinc-600/50 hover:text-white active:bg-zinc-600/50 active:text-white' }} block px-3 py-2 text-base font-medium">{{ $slot }}</a>
