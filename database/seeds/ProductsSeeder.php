<?php

use App\Models\Product;
use App\Models\ProductStatus;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 30)->create()->each(function ($product) {
            $product
                ->status()
                ->save(factory(ProductStatus::class)
                    ->make(['product_id' => $product->id]));
        });
    }
}
