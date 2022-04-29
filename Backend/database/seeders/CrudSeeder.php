<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Api\CrudProductsModel;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CrudProductsModel::create([
            'name_product' => 'Geladeira',
            'description' => 'Em bom Estado',
            'voltage' => '220',
            'brand' => 'Arno'
        ]);
    }
}
