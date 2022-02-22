<?php

namespace Trungpn\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Trungpn\Modules\Contracts\RepositoryInterface;
use Trungpn\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
