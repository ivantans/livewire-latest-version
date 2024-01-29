<?php

namespace App\Livewire;

use Livewire\Component;

class Penjumlahan extends Component
{
    public $total = 0;
    public function render()
    {
        return view('livewire.penjumlahan');
    }

    public function increment(){
        return $this->total++;
    }
    public function decrement(){
        return $this->total--;
    }
}
