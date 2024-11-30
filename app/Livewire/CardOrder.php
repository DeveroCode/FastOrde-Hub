<?php

namespace App\Livewire;

use App\Models\Purchase_summary;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CardOrder extends Component
{

    public function render()
    {
        $orders = DB::table('food_purchase_summary')
            ->join('food', 'food_purchase_summary.food_id', '=', 'food.id')
            ->join('purchase_summaries', 'food_purchase_summary.purchase_summary_id', '=', 'purchase_summaries.id')
            ->select(
                'food_purchase_summary.quantity',
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name as name',
                'purchase_summaries.folio'
            )
            ->orderBy('purchase_summaries.folio')
            ->get()
            ->groupBy('folio');
        return view('livewire.orders.card-order', ['orders' => $orders]);
    }
}
