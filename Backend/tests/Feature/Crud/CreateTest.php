<?php

namespace Tests\Feature\Crud;

use App\Models\Api\CrudProductsModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    /**
     * Creating Data in table at Databanking.
     *
     * @return void
     */
    public function test_example()
    {
        $obj = new CrudProductsModel(['name_product' => 'Geladeira' , 'description' => 'Geladeira Nova', 'voltage' => '220V', 'brand' => 'EletroLux']);
         
        
        $data = [
            'name_product' => 'Geladeira',
            'description' => 'Geladeira Nova',
            'voltage' => '220V' ,
            'brand' => 'EletroLux' ,
        ];

        $response = $this->json('POST', '/api/products', $data);
        $response->assertStatus(200);
     
    }
}
