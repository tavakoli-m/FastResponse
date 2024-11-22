<?php

namespace FastResponse\FastResponse\BaseResponse;

class BaseResponse{
    private string|null $message = null;
    private mixed $data = null;
    private int $status = 200;

    private array $appends = [];

}