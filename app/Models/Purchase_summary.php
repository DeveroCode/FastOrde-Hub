<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_summary extends Model
{
    protected $fillable = [
        'folio',
        'status_id'
    ];

    public function food()
    {
        return $this->belongsToMany(Food::class, 'food_purchase_summary')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
