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

    public function create(array $data) : void
    {
        $this->repository->create($data);
    }

    public function showAll() : Collection
    {
        return $this->repository->showAll();
    }

    public function find(int $id) : CrudProductsModel
    {
        return $this->repository->find($id);
    }

    
    public function delete(int $id) : void
    {
         $this->repository->delete($id);
    }

    public function deleteAll() : void
    {
         $this->repository->deleteAll();
    }

    public function update(int $id ,array $data) : void
    {
         
        $this->repository->update($id, $data);
    }
}