@props([
'label' => '',
'error' => false,
'helpText' => null,
])

<div {{ $attributes->merge(['class' => 'form-check']) }}>
    <label class="form-check-label" for="{{ $attributes->get('id') }}">{{ $label }}
        <input type="checkbox" class="form-check-input">
    </label>
    @if($error)
        <div class="invalid-feedback text-danger">
            {{ $error }}
        </div>
    @endif
    @if($helpText)
        <div class="text-muted fw-lighter fst-italic" style="font-size: .9em">
            {{ $helpText }}
        </div>
    @endif
</div>

