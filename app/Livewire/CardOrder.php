<?php

namespace App\Livewire;

use App\Models\Status;
use Livewire\Component;
use App\Models\ActivitiesUsers;
use App\Models\Purchase_summary;
use Illuminate\Support\Facades\DB;

class CardOrder extends Component
{
    public $orders = [];

    public function mount()
    {
        $this->loadOrders();
    }

    public function updateStatus($status_id, $folio)
    {
        $purchase_summary = Purchase_summary::where('folio', $folio)->first();
        $purchase_summary->update(['status_id' => $status_id]);
        $status = Status::where('id', $status_id)->first();

        ActivitiesUsers::create([
            'user_id' => auth()->user()->id,
            'purchase_summary_id' => $purchase_summary->id,
            'message' => 'Orden' . ' ' . $status->name
        ]);

        notify()->success('Orden actualizada!');
    }

    public function loadOrders()
    {
        $this->orders = DB::table('food_purchase_summary')
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
            ->where('purchase_summaries.status_id', '!=', 3)
            ->where('purchase_summaries.status_id', '!=', 2)
            ->orderBy('purchase_summaries.created_at', 'desc')
            ->get()
            ->groupBy('folio');
    }

    public function render()
    {
        $status = Status::all();
        return view('livewire.orders.card-order', ['status' => $status]);
    }
}
