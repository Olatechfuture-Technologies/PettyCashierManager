<?php

namespace App\Livewire;

use Livewire\Component;

class Cat extends Component
{
    public $category;

    public function render()
    {
        return view('livewire.cat');
    }
}
