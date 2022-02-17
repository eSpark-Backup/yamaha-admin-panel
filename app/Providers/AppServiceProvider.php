<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Model::unguard();

        $this->enforceMorphMap();

        $this->shareInertiaData();
    }


    protected function enforceMorphMap(): void
    {
        Relation::enforceMorphMap([
            'User' => \App\Models\User::class,
            'Product' => \App\Models\Product::class,
        ]);
    }


    protected function shareInertiaData()
    {

        Inertia::share([
            'locale' => function () {
                return \app()->getLocale();
            },

            'language' => function () {
                return translations(
                    \lang_path(app()->getLocale() . '.json')
                );
            }
        ]);
    }
}
