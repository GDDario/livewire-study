<?php

namespace App\Livewire;

use Livewire\Component;

class KeyboardEvent extends Component
{
    public ?string $value = null;
    public int $replaceTimes = 0;

    public function render()
    {
        return view('livewire.keyboard-event');
    }

    public function replaceYInput() {
        $this->replaceTimes++;
        $timeText = $this->replaceTimes > 1 ? 'times' : 'time';
        session()->flash('message', 'Your y input has been replaced ' . $this->replaceTimes . ' ' . $timeText . '!');

        $this->value = str($this->value)->replace('y', 'x', true);
    }
}
