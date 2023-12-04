<div>
    <x-flash-message />

    <form wire:submit="store">
        {{-- <x-input-text fieldName="title" value="form.title"></x-input-text> --}}

        <x-input-textarea fieldName="body" value="form.body"></x-input-textarea>

        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
