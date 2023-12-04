<div class="row">
    @foreach ($posts as $post)
        <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>
