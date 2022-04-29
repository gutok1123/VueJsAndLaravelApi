<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudProductsModel extends Model
{
    use HasFactory;


    protected $table = 'register_products';

    protected $fillable = ['name_product', 'description', 'voltage','brand'];

    public function convertDataToString($id) : string
    {
        return $id;
    }
}
