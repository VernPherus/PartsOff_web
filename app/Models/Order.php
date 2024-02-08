<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        "total_price",
        "status"
    ];

    /**
     * Get the user associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    //* Order has one order detail.
    public function order_detail(): HasOne
    {
        return $this->hasOne(OrderDetail::class, 'order_id', 'id');
    }

    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    //* Order belongs to one customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

}
