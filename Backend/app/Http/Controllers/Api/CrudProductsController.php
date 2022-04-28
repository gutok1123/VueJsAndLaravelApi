<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\CrudProductsService;

class CrudProductsController extends Controller
{
    private $service;

    public function __construct(CrudProductsService $service)
    {
        $this->service = $service;
    }
  
    public function create(Request $request)
   {
     $data = json_decode($request->getContent(), true);

     $this->service->create($data);
   }

   public function showAll()
   {
     return json_encode($this->service->showAll());
   }

   public function showDataSpecify(int $id)
   {
     return json_encode($this->service->find($id));
   }

   public function updateDataSpecify(Request $request, int $id)
   {
    $data = json_decode($request->getContent(), true);

     $this->service->update($id, $data);
   }

   public function deleteDataSpecify(int $id)
   {
        $this->service->delete($id);
   }

   public function deleteAll()
   {
     $this->service->deleteAll();
   }

   
}
