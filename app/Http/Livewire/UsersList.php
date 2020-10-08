<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    public function render()
    {
        $users = User::paginate(15);
        return view('livewire.users-list', compact('users'));
    }
}
