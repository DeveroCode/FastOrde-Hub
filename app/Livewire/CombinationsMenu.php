<?php

namespace App\Livewire;

use App\Models\Food;
use App\Models\Drinks;
use Livewire\Component;

class CombinationsMenu extends Component
{
    public $combinations = [];

    public function mount()
    {
        $foods = Food::all();
        $drinks = Drinks::all();

        // Generar las combinaciones manualmente
        $this->combinations = [];
        foreach ($foods as $food) {
            foreach ($drinks as $drink) {
                $this->combinations[] = (object) [
                    'food' => $food,
                    'drink' => $drink,
                ];
            }
        }
    }

    public function render()
    {
        return view('livewire.functions.combinations-menu', [
            'combinations' => $this->combinations,
        ]);
    }
}
