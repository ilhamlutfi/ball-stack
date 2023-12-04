@props(['active' => false])

@php
    $classes = ($active ?? false) ? 'nav-link active' : 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>{{ $slot }}</a>
</li>
