<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'total',
        'iva',
        'descuento',
        'modo_pago',
        'subtotal',
        'waiter_id',
        'customer_id',
        'cantidad',
        'precio',
        'invoice_id',
        'product_id',
    ];

    /**
     * Get the waiter who served the customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function waiter(): BelongsTo
    {
        return $this->belongsTo(Waiter::class);
    }

    /**
     * Get the customer that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * The products that belong to the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'invoice_detail');
    }
}
