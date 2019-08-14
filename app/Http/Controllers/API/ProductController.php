<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use App\Services\ProductSearchService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('productStatus')->get();

        return response()->json(['success' => $products], 200);
    }

    public function store(StoreProduct $request)
    {
        $product = Product::create($request->all());
        $product->productStatus()->create($request->all());

        return response()->json(['success' => 'Product created'], 200);
    }

    public function update(UpdateProduct $request, int $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        if ($request->has('in_stock')) {
            $product->productStatus()->update(['in_stock' => $request->in_stock]);
        }

        return response()->json(['success' => 'Product updated'], 200);
    }

    public function destroy(int $id)
    {
        Product::destroy($id);

        return response()->json(['success' => 'Deleted'], 200);
    }

    public function search(Request $request, ProductSearchService $searchService)
    {
        $products = $searchService->search($request);
    }
}
