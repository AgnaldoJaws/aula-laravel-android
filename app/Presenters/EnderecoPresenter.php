<?php

namespace SON\Presenters;

use SON\Transformers\EnderecoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EnderecoPresenter
 *
 * @package namespace SON\Presenters;
 */
class EnderecoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EnderecoTransformer();
    }
}
