<?php
namespace App\Repositories\Post;

use App\Repositories\EloquentRepository;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Post::class;
    }

    /**
     * Get all posts only published
     * @return mixed
     */

}