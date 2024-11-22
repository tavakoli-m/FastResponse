<?php

namespace FastResponse\FastResponse\Builder;

use FastResponse\FastResponse\BaseResponse\BaseResponse;

class ResponseBuilder
{
    public function __construct(private BaseResponse $baseResponse) {}
}
