<?php

namespace App\Livewire;

use App\Models\Status;
use Livewire\Component;
use App\Models\ActivitiesUsers;
use App\Models\Purchase_summary;
use Illuminate\Support\Facades\DB;

class ActiveOrders extends Component
{

    public function confirmOrder($id)
    {
        $purchase_summary = Purchase_summary::where('id', $id)->first();
        $purchase_summary->update(['status_id' => 3]);
        $status = Status::where('id', 3)->first();

        ActivitiesUsers::create([
            'user_id' => auth()->user()->id,
            'purchase_summary_id' => $purchase_summary->id,
            'message' => 'Orden' . ' ' . $status->name
        ]);

        notify()->success('Orden confirmada y lista para entrega!');
    }

    public function render()
    {
        $status = Status::where('id', '!=', 1)->get();
        $orders = DB::table('food_purchase_summary')
            ->join('food', 'food_purchase_summary.food_id', '=', 'food.id')
            ->join('purchase_summaries', 'food_purchase_summary.purchase_summary_id', '=', 'purchase_summaries.id')
            ->select(
                'food_purchase_summary.quantity',
                'food_purchase_summary.total_price',
                'food_purchase_summary.purchase_summary_id',
                'food.name as name',
                'purchase_summaries.folio',
                'purchase_summaries.status_id',
                'purchase_summaries.created_at'
            )
            ->where('purchase_summaries.status_id', 2)
            ->orderBy('purchase_summaries.folio', 'desc')
            ->get()
            ->groupBy('folio');
        return view('livewire.orders.active-orders', ['orders' => $orders, 'status' => $status]);
    }
}
