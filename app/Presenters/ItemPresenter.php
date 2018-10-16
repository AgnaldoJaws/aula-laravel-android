<?php

namespace SON\Presenters;

use SON\Transformers\ItemTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ItemPresenter
 *
 * @package namespace SON\Presenters;
 */
class ItemPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ItemTransformer();
    }
}
