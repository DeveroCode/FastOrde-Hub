<?php

namespace App\Livewire;

use App\Models\Food;
use App\Models\Purchase_summary;
use Livewire\Component;

class PurchaseSumaryModal extends Component
{
    public $cuantity = 1;
    public $isOpen = false;
    public $selectedFoods = [];

    public $listeners = ['openModal'];

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
        foreach ($this->selectedFoods as $selectedFood) {
            Purchase_summary::create([
                'food_id' => $selectedFood['food']->id,
                'quantity' => $selectedFood['cuantity'],
                'total_price' => $this->updatePrice(),
            ]);
        }

        $this->selectedFoods = [];
        $this->isOpen = false;

        notify()->success('Orden creada con exito!');
        return redirect()->route('home');
    }

    public function incrementCuantity($foodId)
    {
        foreach ($this->selectedFoods as $i => $selectedFood) {
            if ($selectedFood['food']->id === $foodId) {
                if ($this->selectedFoods[$i]['cuantity'] < 10) return $this->selectedFoods[$i]['cuantity']++;
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
                if ($this->selectedFoods[$i]['cuantity'] > 1) return $this->selectedFoods[$i]['cuantity']--;
            }
        }

        $this->updatePrice();
    }


    public function render()
    {
        return view('livewire.modals.purchase-sumary-modal', [
            'selectedFoods' => $this->selectedFoods,
            'total_pay' => $this->updatePrice()
        ]);
    }
}
