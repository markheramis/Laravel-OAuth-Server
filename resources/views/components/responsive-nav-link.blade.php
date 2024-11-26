@props(['active'])
@php
    $classes = $active ?? false ? 'nav-link d-sm-none active ps-3' : 'nav-link d-sm-none ps-3';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
