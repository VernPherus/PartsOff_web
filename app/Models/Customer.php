<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "gender"
    ];

    /**
     * Get the user associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer_address(): HasOne
    {
        return $this->hasOne(CustomerAddress::class, 'customer_id', 'id');
    }

    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cart_items(): HasMany
    {
        return $this->hasMany(CartItems::class, 'customer_id', 'id');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class, 'customer_id', 'id');
    }

    /**
     * Get the user that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
