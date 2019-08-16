<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    public function test_list_all_products()
    {
        $response = $this
            ->json('GET', '/api/v1/products');

        $response->assertStatus(200);
    }

    public function test_delete_existed_product()
    {
        $response = $this
            ->json('DELETE', '/api/v1/product/2');

        $response->assertStatus(200);
    }

    public function test_delete_not_existed_product()
    {
        $response = $this
            ->json('DELETE', '/api/v1/product/35');

        $response->assertStatus(200);
    }

    public function test_store_product()
    {
        $rand = rand(0, 1535343);
        $data = [
            'price' => "1459.3601",
            'name' => "Prod3432a{$rand}",
            'in_stock' => "1",
        ];

        $response = $this
            ->json('POST', '/api/v1/product/store', $data);

        $response->assertStatus(200);
    }

    public function test_update_product()
    {
        $data = [
            'price' => "152",
            'in_stock' => "1"
        ];

        $response = $this
            ->json('PUT', '/api/v1/product/1', $data);

        $response->assertStatus(200);
    }

    public function test_search()
    {
        $response = $this
            ->json('GET', '/api/v1/products/search?in_stock=0&term=1');

        $response->assertStatus(200);
    }
}
