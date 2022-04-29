<?php

namespace Tests\Feature\Crud;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowAllTest extends TestCase
{
    /**
     * Show All Test in Table At DataTable.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/products');
        $response->assertStatus(200);
    }
}
