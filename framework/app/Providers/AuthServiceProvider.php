<?php
namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

//use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        Passport::refreshTokensExpireIn(Carbon::now()->add(120, 'minutes'));
        Passport::personalAccessTokensExpireIn(Carbon::now()->add(120, 'minutes'));
        // Gate::before(function ($user, $ability) {
        //     return $user->hasRole('Super Admin') ? true : null;
        // });
    }
}
