<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';

    protected $fillable = ['name', 'quantity', 'price'];

    public function orders() {
        return $this->hasMany(Product::class);
    }
}
