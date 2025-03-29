@props([
    'active' => false
])

<a class="nav-link {{ $active ? 'active' : '' }}"
aria-current="{{ $active ?'page' : 'false' }}"
{{ $attributes }}
>
{{ $slot }}
</a>