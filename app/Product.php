<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Tetapan nama table yang harus dihubungi
    protected $table = 'products';

    // Tetapan untuk mass assignment
    protected $fillable = array(
      'name',
      'price'
    );

}
