<?php

namespace FastResponse\FastResponse\Builder;

use FastResponse\FastResponse\BaseResponse\BaseResponse;

class ResponseBuilder
{
    public function __construct(private BaseResponse $baseResponse) {}

    public function withMessage(string $message)
    {
        $this->baseResponse->setMessage($message);
        return $this;
    }

    public function withData(mixed $data)
    {
        $this->baseResponse->setData($data);
        return $this;
    }

    public function withAppends(array $appends)
    {
        $this->baseResponse->setAppends($appends);
        return $this;
    }

    public function withStatus(int $status)
    {
        $this->baseResponse->setStatus($status);
        return $this;
    }

    public function send()
    {
        return $this->baseResponse->response();
    }
}
