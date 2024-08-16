<?php

namespace App\Http\ApiResponses;

use App\Http\ApiResponses\Contracts\ApiResponse;

class FailApiResponse extends ApiResponse
{
    protected function getResponseCode(): int
    {
        return self::HTTP_BAD_REQUEST;
    }
}
