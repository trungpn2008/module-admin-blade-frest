<?php

namespace Trungpn\Modules\Tests;

use Trungpn\Modules\Contracts\RepositoryInterface;
use Trungpn\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
