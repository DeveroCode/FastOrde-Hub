<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Food;
use Livewire\Component;
use App\Models\Purchase_summary;

class PurchaseSumaryModal extends Component
{
    public $cuantity = 1;
    public $isOpen = false;
    public $selectedFoods = [];
    public $folio;

    public $listeners = ['openModal'];

    public function mount()
    {
        $this->folio = $this->createFolio();
    }

    public function openModal($food = null)
    {
        $this->isOpen = !$this->isOpen;
        if ($food) {
            $food = Food::find($food);

            // Verificar si el producto ya está seleccionado
            $existingFoodIndex = null;
            foreach ($this->selectedFoods as $index => $selectedFood) {
                if ($selectedFood['food']->id === $food->id) {
                    $existingFoodIndex = $index;
                    break;
                }
            }
            if ($existingFoodIndex !== null) {
                $this->selectedFoods[$existingFoodIndex]['cuantity'] += $this->cuantity;
            } else {
                $this->selectedFoods[] = ['food' => $food, 'cuantity' => $this->cuantity];
            }

            $this->updatePrice();
        }
    }

    public function createOrder()
    {


        $purchase = Purchase_summary::create([
            'folio' => $this->folio,
            'status_id' => 1
        ]);

        foreach ($this->selectedFoods as $selectedFood) {
            $food = $selectedFood['food'];
            $quantity = $selectedFood['cuantity'];
            $totalPrice = $food->price * $quantity;

            // Insertar en la tabla pivote
            $purchase->food()->attach($food->id, [
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ]);
        }

        $this->selectedFoods = [];
        $this->isOpen = false;

        notify()->success('Orden creada con exito!');
        return redirect()->route('home');
    }

    public function createFolio()
    {
        do {
            $folio = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5));
        } while (Purchase_summary::where('folio', $folio)->exists());

        return $folio;
    }

    public function incrementCuantity($foodId)
    {
        foreach ($this->selectedFoods as $i => $selectedFood) {
            if ($selectedFood['food']->id === $foodId) {
                if ($this->selectedFoods[$i]['cuantity'] < 10) {
                    $this->selectedFoods[$i]['cuantity']++;
                }
            }
        }

        $this->updatePrice();
    }

    public function updatePrice()
    {
        $totalPrice = 0;
        foreach ($this->selectedFoods as $selectedFood) {
            $totalPrice += $selectedFood['food']->price * $selectedFood['cuantity'];
        }

        return $totalPrice;
    }

    public function decrementCuantity($foodId)
    {
        foreach ($this->selectedFoods as $i => $selectedFood) {
            if ($selectedFood['food']->id === $foodId) {
                if ($this->selectedFoods[$i]['cuantity'] > 1) {
                    $this->selectedFoods[$i]['cuantity']--;
                }
            }
        }

        $this->updatePrice();
    }


    public function render()
    {
        return view('livewire.modals.purchase-sumary-modal', [
            'selectedFoods' => $this->selectedFoods,
            'total_pay' => $this->updatePrice(),
            'folio' => $this->folio
        ]);
    }
}
