<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Counter extends Component
{
    #[Locked]
    public int $counter;
    public string $name;
    public string $lastName;

    public function mount() {
        $this->counter = 300;

        $this->fill([
            'name' => 'Gabriel',
            'lastName' => 'Dário'
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function refresh()
    {
        $this->reset();
    }

    public function count()
    {
        $this->counter++;
    }
}
