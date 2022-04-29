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

    /**
     * @param array $data
     * 
     * @return CrudProductsModel
     */
    public function create(array $data) : CrudProductsModel
    {
        return $this->entity->create($data);
    }

    /**
     * @return Collecetion
     */
    public function showAll() : Collection
    {
        return $this->entity->all();
    }

    /**
     * @return CrudProductsModel
     */
    public function find(int $id) : CrudProductsModel
    {
        return $this->entity->find($id);
    }

    /**
     * @param int $id
     * 
     * @param array $data
     * 
     * @return void
     */
    public function update(int $id, array $data) : void
    {
         $this->entity
         ->find($id)
         ->update($data);
    }

    /**
     * @param int $id
     * 
     * @return void
     */
    public function delete(int $id) : void
    {
         $this->entity->find($id)->delete();
    }

    /**
     * @return void
     */
    public function deleteAll() : void
    {
        $this->entity->truncate();
    }
}