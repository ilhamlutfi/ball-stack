<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{
    // #[Rule('required|min:3|max:255')]
    // public string $title = '';

    #[Rule('required')]
    public string $body = '';

    public function create()
    {
        // try {

            $validate = $this->validate();

            $post = Auth::user()->Posts()->create($validate);

            session()->flash('message', 'Post created successfully...');
            session()->flash('type', 'success');

            $this->reset();
            return $post;
        // } catch (\Exception $e) {
        //     session()->flash('message', 'An error occurred while creating the post. Error: ' . $e->getMessage());
        //     session()->flash('type', 'danger');
        // }
    }
}
