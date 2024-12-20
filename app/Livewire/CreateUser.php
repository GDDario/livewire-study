<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateUser extends Component
{
    public UserForm $form;
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
        return view('livewire.create-user');
    }

    public function submit()
    {
        $this->validate();

        $this->form->save();
    }
}
