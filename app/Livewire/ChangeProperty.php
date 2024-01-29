<?php

namespace App\Livewire;

use Livewire\Component;

class ChangeProperty extends Component
{
    public $pesan = "Hello World";
    public function render()
    {
        return view('livewire.change-property');
    }

    public function change(){
        return $this->pesan = "World Hello";
    }
}
