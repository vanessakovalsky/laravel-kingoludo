<?php

namespace App\Providers;

use App\Models\User;
use App\Models\JeuModel;
use App\Policies\JeuPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use App\Authorizations\DemoAuthorization;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        JeuModel::class => JeuPolicy::class,

        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('demo', 'App\Authorizations\DemoAuthorization@demo');
        Gate::define('test', function(User $user){
            dd('arrive dans la gate');
            return true;
        });
    }
}
