<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        $users = User::latest()->paginate(10);

        return view('livewire.users.index', [
            'users' => $users
        ]);
    }
}
