<?php

namespace App\Providers;

use App\Models\MenuItems;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NavHeaderComposer;
use App\Http\ViewComposers\NavFooterComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        View::composer('*', function($view) {
            $view->with(['items' => MenuItems::all()]);
        });
    }
}
