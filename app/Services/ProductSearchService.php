<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductSearchService
{
    public function search(Request $request)
    {
        $products = Product::with('productStatus');

        if ($request->has('in_stock') && isset($request->in_stock)) {
            $products = Product::whereHas('productStatus', function ($query) use ($request) {
                $query->where('in_stock', '=', $request->in_stock);
            });
        }

        if ($request->has('term') && isset($request->term)) {
            $products->where('name', 'like', "%{$request->term}%");
        }

        return $products;
    }
}