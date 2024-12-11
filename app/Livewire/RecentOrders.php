<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class RecentOrders extends Component
{

    use WithPagination;

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
            ->groupBy(
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name',
                'purchase_summaries.folio',
                'purchase_summaries.status_id',
                'purchase_summaries.created_at'
            )
            ->orderBy('purchase_summaries.created_at', 'desc')
            ->paginate(10);
    }

    public function loaders()
    {
        $this->getOrders();
    }

    public function render()
    {
        return view(
            'livewire.admin.recent-orders',
            ['orders' => $this->getOrders()]
        );
    }
}
