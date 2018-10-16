<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Presenters\ItemPresenter;
use SON\Models\Item;

/**
 * Class ItemRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class ItemRepositoryEloquent extends BaseRepository implements ItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Item::class;
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
        return ItemPresenter::class;
    }

    public function applyMultitenancy()
    {
        Item::clearBootedModels();
    }
}
