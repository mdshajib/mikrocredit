@props([
'icon' => '',
'text' => ''
])

<li {{ $attributes->merge(['class' => 'nav-item menu-items']) }}>
    <a class="nav-link" data-toggle="collapse" href="javascript: void(0);" aria-expanded="false">
        @if($icon)
              <span class="menu-icon">
                <i class="mdi {{$icon}}"></i>
              </span>
        @endif
        <span class="menu-title">{{ $text }}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            {{$slot}}
        </ul>
    </div>
</li>

