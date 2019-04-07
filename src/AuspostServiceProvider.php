<?php
declare(strict_types=1);

namespace Byhbt\Auspost;

use Fontis\Auspost\Auspost;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class AuspostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('auspost', function (Container $app) {
            return Auspost::create(env('AUSPOST_API_KEY'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
