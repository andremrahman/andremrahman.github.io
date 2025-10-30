{{-- $attributes untuk menarik attributes dari x-nav-link --}}
<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
  class="{{ $active ? 'bg-gray-950/50 text-white rounded-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} px-3 py-2 text-sm font-medium">{{ $slot }}</a>
