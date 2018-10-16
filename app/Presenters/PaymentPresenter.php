<?php

namespace SON\Presenters;

use SON\Transformers\PaymentTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PaymentPresenter
 *
 * @package namespace SON\Presenters;
 */
class PaymentPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PaymentTransformer();
    }
}
