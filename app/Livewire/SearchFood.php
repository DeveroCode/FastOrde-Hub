<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchFood extends Component
{
    public $foods = [];
    public $word = '';

    public function search()
    {
        $this->dispatch('findFood', $this->word);
    }

    public function render()
    {
        return view('livewire.components.search-food', ['foods' => $this->foods]);
    }
}
