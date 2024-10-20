<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]

class Counter extends Component
{
    public $counter = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function incrementI(int $by): void
    {
        if ($this->counter <= 100) {
            empty($by) ? $this->counter++ : $this->counter += $by;
        }
    }

    public function decrement(): void
    {
        if ($this->counter > 0) {
            empty($by) ? $this->counter-- : $this->counter -= $by;
        }
    }

    public function resetCounter(): void
    {
        $this->reset('counter');
    }
}
