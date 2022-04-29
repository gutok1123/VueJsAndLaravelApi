<?php

namespace Tests\Feature\Crud;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        
        $data = [
            'name_product' => 'Geladeira',
            'description' => 'Geladeira Nova',
        ];

        $response = $this->json('PUT', '/api/products/1', $data);
        $response->assertStatus(200);
    }
}
