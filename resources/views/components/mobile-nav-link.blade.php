{{-- $attributes untuk menarik attributes dari x-mobile-nav-link --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
  class="{{ $active ? 'bg-gray-950/50 text-white rounded-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} block px-3 py-2 text-base font-medium">{{ $slot }}</a>
