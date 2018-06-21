<?php

namespace App\Business\Repositories\Generic;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Business\Models\Generic\Entidade;
use App\Business\Validators\Generic\EntidadeValidator;

/**
 * Class EntidadeRepositoryEloquent.
 *
 * @package namespace App\Business\Repositories;
 */
class EntidadeRepositoryEloquent extends BaseRepository implements EntidadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Entidade::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EntidadeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
