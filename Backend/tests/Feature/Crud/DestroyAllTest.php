<?php

namespace Tests\Feature\Crud;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DestroyAllTest extends TestCase
{
    /**
     * Destroy Data in Table at DataTable.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->delete('/api/products');
        $response->assertStatus(200);
    }
}
