<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;

class CheckOrders extends Component
{

    public $orders = [];
    public function loadOrder()
    {
        $this->orders = $this->getOrders();
    }

    public function getOrders()
    {
        return DB::table('food_purchase_summary')
            ->join('food', 'food_purchase_summary.food_id', '=', 'food.id')
            ->join('purchase_summaries', 'food_purchase_summary.purchase_summary_id', '=', 'purchase_summaries.id')
            ->select(
                DB::raw('SUM(food_purchase_summary.quantity) as total_quantity'),
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name as name',
                'purchase_summaries.folio',
                'purchase_summaries.status_id',
                'purchase_summaries.created_at'
            )
            ->where('purchase_summaries.status_id', '!=', 1)
            ->where('purchase_summaries.status_id', '!=', 2)
            ->groupBy(
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name',
                'purchase_summaries.folio',
                'purchase_summaries.status_id',
                'purchase_summaries.updated_at'
            )
            ->orderBy('purchase_summaries.updated_at', 'desc')
            ->get()
            ->groupBy('folio');
    }


    public function render()
    {
        $this->orders = $this->getOrders();
        return view('livewire.orders.check-orders', ['orders' => $this->orders]);
    }
}
