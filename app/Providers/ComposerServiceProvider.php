<?php

namespace App\Providers;

use App\Message;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        View::composer('app', function ($view) {
            $messages = Message::all([
                'user',
                'text',
                'created_at'
            ]);

            $view->with('messages', $messages);
        });
    }
}
