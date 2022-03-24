@props([
'icon' => '',
'text' => '',
'link' => '#'
])

<li {{ $attributes->merge(['class' => 'nav-item menu-items']) }}>
    <a class="nav-link" href="{{ $link }}">
        <span class="menu-icon">
            @if($icon)
               <i class="mdi {{$icon}}"></i>
            @endif
        </span>
        <span class="menu-title">{{ $text }}</span>
    </a>
</li>
