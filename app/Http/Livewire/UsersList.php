<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::paginate(15);
        return view('livewire.users-list', compact('users'));
    }
}
