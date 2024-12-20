<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Calculator extends Component
{
    public float $num1 = 0;
    public float $num2 = 0;
    public string $operation = '+';
    public float $result = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        sleep(1);

        $val = "{$this->num1}{$this->operation}{$this->num2};";

        $this->result =  eval('return ' . $val);
    }

    public function add10($prop)
    {
        $this->$prop += 10;
    }

    #[Renderless]
    public function log() {
        $this->num1 = 10; // Affects the front but not reload the entire component
        Log::info('Logging... ' . now()->timestamp);
    }
}
