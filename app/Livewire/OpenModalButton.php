<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class OpenModalButton extends Component
{
    public $visible = false;

    public function mount()
    {
        if (request()->routeIs('orders.index') || request()->routeIs('orders.check')) {
            $this->visible = false;
        } else {
            $this->visible = true;
        }
    }

    public function render()
    {
        return view('livewire.open-modal-button');
    }
}
