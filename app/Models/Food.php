<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //

    protected $table = 'food';

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'is_available',
    ];

    public function purchase_summaries()
    {
        return $this->belongsToMany(Purchase_summary::class, 'food_purchase_summary')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }
}
