<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable=[
        "quantity"
    ];

    /**
     * Get the user that owns the CartItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    //cart item belongs to cutomer class
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

}
