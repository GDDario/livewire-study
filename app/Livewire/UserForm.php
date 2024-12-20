<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{
    #[Rule(['required', 'string', 'max:255', 'min:2'])]
    public string $name;
    #[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $email;
    #[Rule(['required', 'max:255', 'min:2', 'confirmed:passwordConfirmation'])]
    public string $password;
    public string $passwordConfirmation;

//    public function rules(): array {
//        return [
//            'name' => ['required', 'string', 'max:255', 'min:2'],
//            'email' => ['required', 'email', 'max:255', 'min:2'],
//            'password' => ['required', 'confirmed', 'min:2', 'confirmed:passwordConfirmation'],
//        ];
//    }
//
//    public function updated($attr, $value): void
//    {
//        $this->validateOnly($attr);
//    }

    public function render()
    {
        return view('livewire.user-form');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
