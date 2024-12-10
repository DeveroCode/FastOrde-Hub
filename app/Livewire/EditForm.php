<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditForm extends Component
{
    use WithFileUploads;

    public $name;
    public $descripción;
    public $precio;
    public $imagen;
    public $fecha;

    // Set variable to edit food
    public $foodId;
    public $imagen_nueva;

    protected $rules = [
        'name' => 'required|string',
        'descripción' => 'required|string',
        'precio' => 'required|numeric|min:80',
        'imagen_nueva' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        'fecha' => 'required|date',
    ];


    public function mount(Food $food)
    {
        $this->foodId = $food->id;
        $this->name = $food->name;
        $this->descripción = $food->description;
        $this->precio = $food->price;
        $this->imagen = $food->image;
        $this->fecha = $food->created_at->format('Y-m-d');
    }

    public function editFood()
    {
        $data = $this->validate();
        if ($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('/foods');
            $data['imagen'] = str_replace('/foods/', '', $imagen);
        }

        $food = Food::find($this->foodId);
        $food->name = $data['name'];
        $food->description = $data['descripción'];
        $food->price = $data['precio'];
        $food->image = $data['imagen'];
        $food->created_at = $data['fecha'];
        $food->save();

        notify()->success('Platillo actualizado con éxito!');
        return redirect()->route('dashboard.show');
    }


    public function render()
    {
        return view('livewire.admin.edit-form');
    }
}
