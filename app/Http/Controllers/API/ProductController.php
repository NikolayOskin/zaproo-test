<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\SearchProduct;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use App\Services\ProductSearchService;
use App\Http\Controllers\Controller;

/**
 * @group Products
 *
 * APIs for products
 */
class ProductController extends Controller
{
    /**
     * Get all products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::with('productStatus')->get();

        return response()->json(['success' => $products], 200);
    }

    /**
     * Store product
     *
     * @bodyParam name string required Alphanumeric
     * @bodyParam price float required Two decimals number
     * @bodyParam in_stock boolean required 1 or 0, not "true" or "false
     * @param StoreProduct $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreProduct $request)
    {
        $product = Product::create($request->all());
        $product->productStatus()->create($request->all());

        return response()->json(['success' => 'Product created'], 200);
    }

    /**
     * Update product
     *
     * @bodyParam name string Alphanumeric
     * @bodyParam price float Two decimals number
     * @bodyParam in_stock boolean 1 or 0, not "true" or "false
     * @param UpdateProduct $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateProduct $request, int $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        if ($request->has('in_stock')) {
            $product->productStatus()->update(['in_stock' => $request->in_stock]);
        }

        return response()->json(['success' => 'Product updated'], 200);
    }

    /**
     * Delete product
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        Product::destroy($id);

        return response()->json(['success' => 'Deleted'], 200);
    }

    /**
     * Search product
     *
     * @queryParam term Example: api/v1/products/search?term=iphone7
     * @queryParam in_stock Example: api/v1/products/search?term=iphone7&in_stock=1 (1 or 0)
     * @param SearchProduct $request
     * @param ProductSearchService $productSearchService
     * @return void
     */
    public function search(SearchProduct $request, ProductSearchService $productSearchService)
    {
        $products = $productSearchService->search($request);

        return response()->json(['success' => $products->get()], 200);
    }
}
