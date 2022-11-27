<?php

namespace App\Providers;
use App\Interfaces\StaffRepositoryInterface;
use App\Repositories\StaffRepository;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Repositories\DepartmentRepository;

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
