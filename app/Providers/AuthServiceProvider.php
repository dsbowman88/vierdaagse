<?php

namespace App\Providers;

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
        'App\Participant' => 'App\Policies\ParticipantPolicy',
        'App\School' => 'App\Policies\SchoolPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        Gate::before(function ($user){
            if ($user->id <= 2){ // Hardcoded op 1
                return true;
            };
        });
    }
}
