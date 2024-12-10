<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFood extends Component
{
    public $name;
    public $descripción;
    public $precio;
    public $imagen;
    public $fecha;

    use WithFileUploads;

    protected $rules = [
        'name' => 'required|string|max:255',
        'descripción' => 'required|string|max:255',
        'precio' => 'required|numeric|min:80',
        'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'fecha' => 'required|date',
    ];

    public function create()
    {
        $data = $this->validate();

        $data = array_map('strtolower', $data);

        $imagen = $this->imagen->store('/foods');
        $data['imagen'] = str_replace('/foods/', '', $imagen);

        Food::create([
            'name' => $data['name'],
            'description' => $data['descripción'],
            'price' => $data['precio'],
            'image' => $data['imagen'],
            'created_at' => $data['fecha'],
            'is_available' => true
        ]);

        $this->reset();
        notify()->success('Platillo creado con exito!');
        return redirect()->route('dashboard.index');
    }

    public function render()
    {
        return view('livewire.admin.add-food');
    }
}
