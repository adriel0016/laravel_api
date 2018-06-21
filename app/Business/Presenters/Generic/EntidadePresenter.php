<?php

namespace App\Business\Presenters\Generic;

use App\Business\Transformers\EntidadeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EntidadePresenter.
 *
 * @package namespace App\Business\Presenters;
 */
class EntidadePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EntidadeTransformer();
    }
}
