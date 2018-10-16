<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Repositories\PaymentRepository;
use SON\Presenters\PaymentPresenter;
use SON\Models\Payment;


/**
 * Class PaymentRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class PaymentRepositoryEloquent extends BaseRepository implements PaymentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Payment::class;
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
        return PaymentPresenter::class;
    }

    public function applyMultitenancy()
    {
        Payment::clearBootedModels();
    }
}
