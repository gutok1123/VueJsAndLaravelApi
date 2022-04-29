<?php

namespace Tests\Feature\Crud;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DestroyTest extends TestCase
{
    /**
     * Destroy All Data in Table at DataTable.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->delete('/api/products/1');
        $response->assertStatus(200);
    }
}
