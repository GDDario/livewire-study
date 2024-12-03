<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;

    public function mount() {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
