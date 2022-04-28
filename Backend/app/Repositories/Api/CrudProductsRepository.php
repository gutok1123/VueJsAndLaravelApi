<?php

namespace App\Repositories\Api;

use App\Models\Api\CrudProductsModel;
use App\Interfaces\Api\CrudProductsInterface;
use Illuminate\Database\Eloquent\Collection;

class CrudProductsRepository implements CrudProductsInterface 
{
    protected $entity;

    public function __construct(CrudProductsModel $entity)
    {
        $this->entity = $entity;   
    }

    public function create(array $data) : CrudProductsModel
    {
        return $this->entity->create($data);
    }

    public function showAll() : Collection
    {
        return $this->entity->all();
    }

    public function find(int $id) : CrudProductsModel
    {
        return $this->entity->find($id);
    }
    public function update(int $id, array $data) : void
    {
         $this->entity
         ->find($id)
         ->update($data);
    }
    public function delete(int $id) : void
    {
         $this->entity->find($id)->delete();
    }
    public function deleteAll() : void
    {
        $this->entity->truncate();
    }
}