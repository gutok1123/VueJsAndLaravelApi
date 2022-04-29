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
  
    /**
     * @param Request
     * 
     * @return void
     */
    public function create(Request $request) : void
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

    /**
     * @param Request
     * 
     * @param int $id
     * 
     * @return void
     */
   public function updateDataSpecify(Request $request, int $id) : void
   {
    $data = json_decode($request->getContent(), true);

     $this->service->update($id, $data);
   }

    /**
     * @param int $id
     * 
     * @return void
     */
   public function deleteDataSpecify(int $id) : void
   {
        $this->service->delete($id);
   }

    /**
     * @return void
     */
   public function deleteAll() :void
   {
     $this->service->deleteAll();
   }

   
}
