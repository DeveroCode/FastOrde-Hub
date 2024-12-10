<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class TableFoods extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $id;
    public $foodId;
    public $food;

    public function edit($fooId = null)
    {
        $this->id = $fooId;
        $this->isOpen = true;
        $this->dispatch('openEdit', $this->id);
    }

    public function render()
    {
        return view('livewire.tables.table-foods', [
            'foods' => Food::paginate(12),
            'isOpen' => $this->isOpen
        ]);
    }
}
