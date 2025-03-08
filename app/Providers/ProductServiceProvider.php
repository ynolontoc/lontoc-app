<?php

namespace App\Providers;

use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function($app){
            $products = [
                [
                    'id' => 1,
                    'name' => 'Apple',
                    'category' => 'Fruit'
                ],
                [
                    'id' => 2,
                    'name' => 'Gulay',
                    'category' => 'Vegetalbe'
                ],
                [
                    'id' => 3,
                    'name' => 'Sardines',
                    'category' => 'Canned Foods'
                ],
            ];
            return new ProductService($products);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'Lontoc');
    }
}