<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
       $contact = Article::where('type','contact')->first();
    //    dd($contact);
        View::share(['contact'=>$contact]);
        if (env('APP_ENV') == 'production') {
            URL::forceScheme('https');
        }
    }
}
