<?php

namespace SON\Http\Controllers\Api;

use SON\Http\Controllers\Controller;


use Illuminate\Http\Request;
use SON\Http\Requests\PaymentRequest;
use SON\Repositories\PaymentRepository;




class PaymentsController extends Controller
{

    /**
     * @var CategoryRepository
     */
    protected $repository;


    public function __construct(PaymentRepository $repository)
    {
        $this->repository = $repository;
        $this->repository->applyMultitenancy();
    }


    
    public function index()
    {
        return $this->repository->all();
    }

    
    public function store(PaymentRequest $request)
    {
              
        $category = $this->repository->create($request->all());
        return response()->json($category, 201);
    }


    
    public function show($id)
    {
        return $this->repository->find($id);
    }


   
    public function update(PaymentRepository $request, $id)
    {
        $category = $this->repository->update($request->all(),$id);
        return response()->json($category, 200);
    }


   
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if($deleted){
            return response()->json([], 204);
        }else{
            return response()->json([
                'error' => 'Resource can not be deleted'
            ], 500);
        }
    }
}
