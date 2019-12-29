<?php

namespace Modules\Example\Providers;

use OpenCore\Support\Providers\RoutingServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'Modules\Example\Http\Controllers';

    /**
     * @return string
     */
    protected function getCatalogRoute()
    {
        return __DIR__ . '/../Routes/catalog.php';
    }
    /**
     * @return string
     */
    protected function getAdminRoute()
    {
        return __DIR__ . '/../Routes/admin.php';
    }
    /**
     * @return string
     */
    protected function getApiRoute()
    {
        //return __DIR__ . '/../Routes/apiRoutes.php';
    }
}
