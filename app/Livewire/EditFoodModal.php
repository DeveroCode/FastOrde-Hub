<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Attributes\On;
use Livewire\Component;

class EditFoodModal extends Component
{
    public $food;
    public $isOpen = false;
    public $foodId;
    public function mount()
    {
        if ($this->foodId) {
            $this->food = Food::findOrFail($this->foodId);
            $this->isOpen = true;
        }
    }
    #[On('openEdit')]
    public function editModal($id)
    {
        $this->foodId = $id;
        $this->food = Food::findOrFail($this->foodId);
        $this->isOpen = true;  // Abre el modal
    }
    public function render()
    {
        return view('livewire.modals.edit-food-modal', ['food' => $this->food]);
    }
}
