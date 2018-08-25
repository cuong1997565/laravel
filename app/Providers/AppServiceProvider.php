<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Slide;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         $data['category'] = Category::all()->toArray();
        $data['slide'] = Slide::where('status', 1)->take(1)->get();;
        view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
            $this->app->singleton(
                    \App\Repositories\Slide\SlideRepositoryInterface::class,
                    \App\Repositories\Slide\SlideEloquentRepository::class
            );

            $this->app->singleton(
                  \App\Repositories\Category\CategoryRepositoryInterface::class,
                    \App\Repositories\Category\CategoryEloquentRepository::class
            );

             $this->app->singleton(
                  \App\Repositories\Post\PostRepositoryInterface::class,
                    \App\Repositories\Post\PostEloquentRepository::class
            );

            $this->app->singleton(
                  \App\Repositories\User\UserRepositoryInterface::class,
                    \App\Repositories\User\UserEloquentRepository::class
            );
    }
}
