<?php

namespace App\Business\Models\Generic;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Entidade.
 *
 * @package namespace App\Business\Models;
 */
class Entidade extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','descricao','ativo'];

}
