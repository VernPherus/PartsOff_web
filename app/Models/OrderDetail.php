<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        "first_name",
        "last_name",
        "email",
        "address1",
        "address2"
    ];

    /**
     * Get all of the comments for the OrderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    //* Order Details has many items
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_item', 'id');
    }

    /**
     * Get the user that owns the OrderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    //order details belong to one order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}
