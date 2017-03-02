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
}
