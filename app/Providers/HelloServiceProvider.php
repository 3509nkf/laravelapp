<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class HelloServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        View::composer(
           'hello.index', 'App\Http\Composers\HelloComposer'
           
        );
    }
}
