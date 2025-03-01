<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        $this->app->singleton(UserService::class, function($app) {

            $users = [
                [
                    'name' => 'Celestino Lontoc',
                    'gender' => 'Male',
                    'age' => '20'
                ],
                [
                    'name' => 'Renzo Toledo',
                     'gender' => 'Male',
                    'age' => '20'
                ],
                [
                    'name' =>'Joshua Bernardino',
                     'gender' => 'Male',
                    'age' => '22'
                ],
      
           
                ];
                return new UserService($users);

        });
    } 


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}