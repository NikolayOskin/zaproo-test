<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    public $timestamps = false;
    protected $fillable = ['in_stock'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
