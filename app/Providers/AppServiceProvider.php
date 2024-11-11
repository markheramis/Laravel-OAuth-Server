<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Hash the client secrets
        Passport::hashClientSecrets();

        Passport::setClientUuids(false);

        // Set the expiration times for tokens
        Passport::tokensExpireIn(now()->addDays(15));
        // Set the refresh token expiration time
        Passport::refreshTokensExpireIn(now()->addDays(30));
        // Set the personal access token expiration time
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }
}
