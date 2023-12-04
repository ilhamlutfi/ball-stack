@props(['fieldName', 'value'])

<div class="mb-4">
    <label for="{{ $fieldName }}">{{ ucfirst($fieldName) }}</label>
    <textarea wire:model="{{ $value }}" id="{{ $fieldName }}" rows="3"
        class="form-control @error($value) is-invalid @enderror">{{ $value }}</textarea>

    @error($value)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
