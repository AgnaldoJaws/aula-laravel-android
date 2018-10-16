<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Repositories\EnderecoRepository;
use SON\Models\Endereco;

use SON\Presenters\EnderecoPresenter;

/**
 * Class EnderecoRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class EnderecoRepositoryEloquent extends BaseRepository implements EnderecoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Endereco::class;
    }

   
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return EnderecoPresenter::class;
    }

    public function applyMultitenancy()
    {
        Endereco::clearBootedModels();
    }
}
