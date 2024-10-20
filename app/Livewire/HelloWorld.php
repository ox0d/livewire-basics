<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]

class HelloWorld extends Component
{
    public function render()
    {
        return view('livewire.hello-world');
    }
}