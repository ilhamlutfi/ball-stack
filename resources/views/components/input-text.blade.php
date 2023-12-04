@props(['fieldName', 'value'])

<div class="mb-4">
    <label for="{{ $fieldName }}">{{ ucfirst($fieldName) }}</label>
    <input type="text" wire:model="{{ $value }}" id="{{ $fieldName }}" class="form-control @error($value) is-invalid @enderror" value="{{ $value }}">

    @error($value)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
