<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;

class CardsFoods extends Component
{
    public function render()
    {
        $foods = Food::all();
        return view('livewire.cards-foods', [
            'foods' => $foods
        ]);
    }
}
