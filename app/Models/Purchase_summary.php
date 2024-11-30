<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase_summary extends Model
{
    protected $fillable = [
        'food_id',
        'total_price',
        'cuantity'
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
