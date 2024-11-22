<?php

namespace FastResponse\FastResponse\Providers;

use FastResponse\FastResponse\BaseResponse\BaseResponse;
use FastResponse\FastResponse\Builder\ResponseBuilder;
use Illuminate\Support\ServiceProvider;

class FastResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('fastResponse', function () {
            return new ResponseBuilder(new BaseResponse);
        });
    }
}
