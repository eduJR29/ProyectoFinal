<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\Paciente;
use App\Models\Cita;
use App\Policies\PacientePolicy;
use App\Policies\TeamPolicy;
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
        Paciente::class => PacientePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        //Gate::define('editar-paciente', function (User $user, Paciente $paciente){
          //  return $user->id == $paciente->user_id;
        //});


        $this->registerPolicies();

        //
    }
}
