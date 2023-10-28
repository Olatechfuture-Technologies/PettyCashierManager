<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class TenantList extends Component
{
    public $good = 'Good';
    public function render()
    {
        return view('livewire.backend.tenant-list');
    }

    public function mount()
    {
        $this->good;
    }
}
