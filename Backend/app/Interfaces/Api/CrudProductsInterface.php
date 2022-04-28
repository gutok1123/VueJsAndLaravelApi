<?php

namespace App\Interfaces\Api;

use App\Models\Api\CrudProductsModel;
use Illuminate\Database\Eloquent\Collection;


interface CrudProductsInterface {
    public function create(array $data) : CrudProductsModel;
    public function showAll() : Collection;
    public function find(int $id) : CrudProductsModel;
    public function update(int $id, array $data) : void;
    public function delete(int $id) : void;
    public function deleteAll() : void;
}