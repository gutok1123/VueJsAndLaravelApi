<?php

namespace App\Services\Api;

use App\Interfaces\Api\CrudProductsInterface;
use App\Models\Api\CrudProductsModel;
use Illuminate\Database\Eloquent\Collection;

class CrudProductsService {

    private $repository;

    public function __construct(CrudProductsInterface $repository)
    {
        $this->repository = $repository;
    }
   
    /**
     * @param array $data
     * 
     * @return void
     */
    public function create(array $data) : void
    {
        $this->repository->create($data);
    }

    /**
     * @return Collection
     */
    public function showAll() : Collection
    {
        return $this->repository->showAll();
    }

    /**
     * @param int $id
     * 
     * @return CrudProductsModel
     */
    public function find(int $id) : CrudProductsModel
    {
        return $this->repository->find($id);
    }

    /**
     * @param int $id
     * 
     * @return void
     */
    public function delete(int $id) : void
    {
         $this->repository->delete($id);
    }
    
    /**
     * @return void
     */
    public function deleteAll() : void
    {
         $this->repository->deleteAll();
    }

    /**
     * @param int $id
     * 
     * @param array $data
     * 
     * @return void
     */
    public function update(int $id ,array $data) : void
    {
         
        $this->repository->update($id, $data);
    }
}