<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Mass Assigments
    protected $fillable = [
      'product_id',
      'customer_name',
      'customer_email',
      'customer_phone',
      'customer_address',
      'status',
      'payment_amount'
    ];

    // Relationship table order bagi column product_id
    // dengan table product bagi column id
    public function product()
    {
      return $this->belongsTo(Product::class, 'product_id');
      //return $this->belongsTo('App\Product');
    }

}
