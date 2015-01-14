<?php namespace Acme;

use Illuminate\Support\ServiceProvider;

class JobPostServiceProvider extends ServiceProvider {

    /**
     * Registers and Binds all the relevant interfaces in the IOC container;
     * making sure all Repositories and any modules and/or utilities will
     * automatically be resolved via the IOC container
     */
    public function register()
    {
        $this->app->bind(
            'Acme\Modules\JobPost\Repositories\JobPostRepositoryInterface',
            'Acme\Modules\JobPost\Repositories\EloquentJobPostRepository'
        );
    }
}