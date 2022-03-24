@props([
'label' => '',
'error' => false
])

<div class="form-group">
    <label for="{{ $attributes['id'] ?? null }}">{{ $label }}</label>
    <textarea {{ $attributes->merge(['class' => 'form-control']) }}"></textarea>
    @if($error)
        <div class="invalid-feedback text-danger">
            {{ $error }}
        </div>
    @endif
</div>
