<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'quantity', 'total_price', 'status'];

    const STATUS_PENDING = 'Pending';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_SHIPPING = 'Shipping';
    const STATUS_DELIVERED = 'Delivered';

    /**
     * The user (customer) who placed the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The product that was ordered.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
