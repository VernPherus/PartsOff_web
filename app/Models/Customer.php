<?php

namespace App\Models;

use App\Models\CustomerAddress as ModelsCustomerAddress;
use App\Models\User;
use App\Models\Order;
use App\Models\CustomerReview;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        return $this->hasOne(ModelsCustomerAddress::class, 'customer_id', 'id');
    }

    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    //* Customer has many cart items
    public function cart_items(): HasMany
    {
        return $this->hasMany(CartItem::class, 'customer_id', 'id');
    }

    //* Customer has many orders
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    /**
     * Get the user associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    //* Customer has one review
    public function customer_review(): HasOne
    {
        return $this->hasOne(CustomerReview::class, 'created_by', 'id');
    }

    /**
     * Get the user that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    //* Customer belongs to one user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
