<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.users.show')->title('User: ' . $this->user->name);
    }
}
