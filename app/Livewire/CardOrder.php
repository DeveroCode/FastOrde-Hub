<?php

namespace App\Livewire;

use App\Models\Purchase_summary;
use Livewire\Component;

class CardOrder extends Component
{

    public function render()
    {
        $orders = Purchase_summary::with('food')->get();
        return view('livewire.orders.card-order', ['orders' => $orders]);
    }
}
