<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        "name", "description", "amount", "price", "image"
    ];
}
