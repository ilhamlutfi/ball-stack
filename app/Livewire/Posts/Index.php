<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Posts')]
class Index extends Component
{
    // listeners from Create
    #[On('postCreated')]
    public function updateBlock($post)
    {

    }

    // lazy placeholder
    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        $posts = Post::with('User')->latest()->get();

        return view('livewire.posts.index', [
            'posts' => $posts
        ]);
    }
}
