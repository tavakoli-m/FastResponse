<?php

namespace FastResponse\FastResponse\Facades;

use Illuminate\Support\Facades\Facade;


class Response extends Facade{
    protected static function getFacadeAccessor(){
        return 'fastResponse';
    }
}