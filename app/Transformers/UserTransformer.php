<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\User;

/**
 * Class CategoryTransformer
 * @package namespace SON\Transformers;
 */
class UserTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param \Category $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'name'         => (int) $model->name        
            
        ];
    }
}
