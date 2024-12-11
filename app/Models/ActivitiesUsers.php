<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivitiesUsers extends Model
{
    protected $fillable = [
        'user_id',
        'purchase_summary_id',
        'message'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function purchase()
    {
        return $this->belongsTo(Purchase_summary::class, 'purchase_summary_id');
    }
}
