<?php
namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Category::class;
    }

    /**
     * Get all posts only published
     * @return mixed
     */

}