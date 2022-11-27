<?php

namespace App\Providers;

use App\Interfaces\StaffRepositoryInterface;
use App\Repositories\StaffRepository;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Repositories\DepartmentRepository;

use App\Interfaces\PatientRepositoryInterface;
use App\Repositories\PatientRepository;

use App\Repositories\StentTypeRepository;
use App\Interfaces\StentTypeRepositoryInterface;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StaffRepositoryInterface::class, StaffRepository::class);
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(StentTypeRepositoryInterface::class, StentTypeRepository::class);


        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
