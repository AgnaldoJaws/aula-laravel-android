<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Endereco;
use SON\Models\User;

/**
 * Class EnderecoTransformer
 * @package namespace SON\Transformers;
 */
class EnderecoTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ['category'];

    /**
     * Transform the \Endereco entity
     * @param \Endereco $model
     *
     * @return array
     */
    public function transform(Endereco $model)
    {
        return [
            'id'                     => (int) $model->id,
            'cep'                    =>  $model->cep,
            'address'                =>  $model->address,
            'number'                 =>  $model->number,
            'city'                   =>  $model->city,
            'neighborhood'           =>  $model->neighborhood,
            'state'                  =>  $model->state,
            'complement'             =>  $model->complement,
            'user_id'                =>  $model->user_id           
           
        ];
        
    }

    public function includeCategory(Endereco $model){
        return $this->item($model->category, new UserTransformer());
    }
}
