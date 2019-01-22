<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //kasi tau nama tabel
    protected $table = "product";

    //yang kedua atributnya
    protected $fillable = [
        'product_id',
        'name',
        'price',
        'description'
    ];
}
