<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class OpenModalButton extends Component
{
    public $open = false;
    #[On('isOpen')]
    public function setValue($value)
    {
        $this->open = $value;
    }
    public function render()
    {
        return view('livewire.open-modal-button', [
            'open' => $this->open
        ]);
    }
}
