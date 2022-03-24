@props([
'required' =>'',
'label' => '',
'error' => false
])

<div class="form-group">
    @if($label)
        <label for="{{ $attributes['id'] ?? null }}">{{ $label }}</label>
    @endif
    <input {{ $attributes->merge(['type' => 'text', 'class' => 'form-control']) }} >
    @if($error)
        <div class="invalid-feedback d-block text-danger">
            {{ $error }}
        </div>
    @endif
</div>
