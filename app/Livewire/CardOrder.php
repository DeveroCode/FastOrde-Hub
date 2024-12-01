<?php

namespace App\Livewire;

use App\Models\Purchase_summary;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CardOrder extends Component
{
    public function updateStatus($status_id, $folio)
    {
        $purchase_summary = Purchase_summary::where('folio', $folio)->first();
        $purchase_summary->update(['status_id' => $status_id]);

        notify()->success('Orden actualizada!');
        return redirect()->route('orders.index');
    }

    public function render()
    {
        $status = Status::all();
        $orders = DB::table('food_purchase_summary')
            ->join('food', 'food_purchase_summary.food_id', '=', 'food.id')
            ->join('purchase_summaries', 'food_purchase_summary.purchase_summary_id', '=', 'purchase_summaries.id')
            ->select(
                'food_purchase_summary.quantity',
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name as name',
                'purchase_summaries.folio',
                'purchase_summaries.status_id'
            )
            ->orderBy('purchase_summaries.folio', 'desc')
            ->get()
            ->groupBy('folio');
        return view('livewire.orders.card-order', ['orders' => $orders, 'status' => $status]);
    }
}
