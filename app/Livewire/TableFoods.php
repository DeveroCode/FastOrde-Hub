<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class TableFoods extends Component
{
    use WithPagination;
    public $foodId;

    public function change($id)
    {
        $food = Food::find($id);

        $food->is_available = !$food->is_available;
        $food->save();

        notify()->success('Estado cambiado con exito!');
        return redirect()->route('dashboard.show');
    }
    public function delete($id)
    {
        $food = Food::find($id);
        $food->delete();

        notify()->success('Platillo eliminado con exito!');
        return redirect()->route('dashboard.show');
    }

    public function render()
    {
        return view('livewire.tables.table-foods', [
            'foods' => Food::paginate(12)
        ]);
    }
}
