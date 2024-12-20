<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule(['required', 'string', 'max:255', 'min:2'])]
    public string $name;
    #[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $email;
    #[Rule(['required', 'max:255', 'min:2', 'confirmed:passwordConfirmation'])]
    public string $password;
    public string $passwordConfirmation;

    public function save(): void
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
