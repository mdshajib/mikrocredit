@props([
'label' => ''
])

<button {{ $attributes->merge(['class' => 'btn']) }} >{{$label}}</button>
