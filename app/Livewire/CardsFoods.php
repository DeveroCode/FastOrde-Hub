<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Attributes\On;
use Livewire\Component;

class CardsFoods extends Component
{
    public $foods = [];

    public function mount()
    {
        $this->foods = Food::all();
    }

    #[On('findFood')]
    public function loadFoods($value)
    {
        if (empty($value)) {
            $this->foods = Food::all();
        } else {
            $this->foods = Food::where('name', 'like', '%' . $value . '%')->get();
            if ($this->foods->isEmpty()) {
                $this->foods = Food::all();
            }
        }
    }

    public function render()
    {
        return view('livewire.cards-foods');
    }
}
