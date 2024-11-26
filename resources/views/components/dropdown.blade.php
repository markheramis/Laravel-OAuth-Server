@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'py-1',
])
@php
    $alignmentClasses = match ($align) {
        'left' => 'dropdown-menu-start',
        'right' => 'dropdown-menu-end',
        default => 'dropdown-menu-end',
    };
@endphp
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $title }}
    </a>
    <ul class="dropdown-menu {{ $alignmentClasses }}">
        {{ $content }}
    </ul>
</li>
