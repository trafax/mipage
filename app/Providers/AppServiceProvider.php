<?php

namespace App\Providers;

use App\Models\Website;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
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
        if (app()->runningInConsole() == false) {

            // Get website
            $domain = request()->getHost();
            $website = Website::where('domain', $domain)->first();

            // Throw error when not found
            if (! $website) abort(403, 'Website niet actief of gevonden.');

            // Set database
            $config = config();
            $config->set('database.connections.website.database', $website->options['db_database']);
            $config->set('database.connections.website.username', $website->options['db_username']);
            $config->set('database.connections.website.password', $website->options['db_password']);

            Schema::defaultStringLength(191);
            Artisan::call('migrate', ['--force' => true]);
        }
    }
}
