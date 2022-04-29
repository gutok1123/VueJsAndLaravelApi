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
    public function test_user_can_create_new_product()
    {
        $task = CrudProductsModel::factory()->create();
         
       
        $this->post('/api/products',$task->toArray());
        //It gets stored in the database

        $id = CrudProductsModel::select('id')->latest()->first();

        $this->assertEquals(1,CrudProductsModel::find($id)->count());
     
    }
}
