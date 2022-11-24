<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\User;
use App\Models\Prenda;
use App\Policies\TeamPolicy;
use App\Policies\PrendaPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Prenda::class => PrendaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('edita-prenda', function(User $user, Prenda $prenda) {
        //     return $user->id === $prenda->user_id;
        // });

        Gate::define('edita-prenda', function(User $user) {
            return $user->rol === 'Administrador';
        });

        Gate::define('crea-prenda', function (User $user) {
            return $user->rol === 'Administrador'
                ? Response::allow()
                : Response::deny('You must be an administrator.');
        });
    }
}
