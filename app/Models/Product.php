<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];
    protected $hidden = [
        'productStatus'
    ];
    protected $appends = ['status'];

    public function getStatusAttribute()
    {
        return $this->productStatus->in_stock ? "In Stock" : "Out Of Stock";
    }

    public function productStatus()
    {
        return $this->hasOne(ProductStatus::class);
    }
}
