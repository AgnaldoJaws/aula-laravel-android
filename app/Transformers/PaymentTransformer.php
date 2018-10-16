<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Payment;

/**
 * Class PaymentTransformer
 * @package namespace SON\Transformers;
 */
class PaymentTransformer extends TransformerAbstract
{

    /**
     * Transform the \Payment entity
     * @param \Payment $model
     *
     * @return array
     */
    public function transform(Payment $model)
    {
        return [
            'id'            => (int) $model->id,
            'method'        =>  $model->method,
            'total'         => (int) $model->total,
            'token'         =>  $model->token,
            'user_id'       =>  $model->user_id
        ];
    }
}
