<?php

namespace App\Business\Transformers\Generic;

use League\Fractal\TransformerAbstract;
use App\Business\Models\Generic\Entidade;

/**
 * Class EntidadeTransformer.
 *
 * @package namespace App\Business\Transformers;
 */
class EntidadeTransformer extends TransformerAbstract
{
    /**
     * Transform the Entidade entity.
     *
     * @param \App\Business\Models\Generic\Entidade $model
     *
     * @return array
     */
    public function transform(Entidade $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
