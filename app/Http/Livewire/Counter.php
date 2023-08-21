<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decriment()
    {
        if ($this->count > 1) {
            $this->count--;
        } else {
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
