<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Item;

/**
 * Class ItemTransformer
 * @package namespace SON\Transformers;
 */
class ItemTransformer extends TransformerAbstract
{

    protected $defaultIncludes = ['items'];
    /**
     * Transform the \Item entity
     * @param \Item $model
     *
     * @return array
     */
    public function transform(Item $model)
    {
        return [
            'id'           => (int) $model->id,
            // 'dish_id'      => (int) $model->dish_id,
            'payment_id'   => (int) $model->payment_id,
            'qtd'          => (int) $model->qtd,
            'value'        => (int) $model->value,
            'user_id'      => (int) $model->user_id,
            
        ];
    }
    public function includeItems(Item $model){
        return $this->item($model->items, new PaymentTransformer());
    }
}
