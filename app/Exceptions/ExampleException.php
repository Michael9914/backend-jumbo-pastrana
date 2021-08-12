<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ExampleException extends Exception
{
    public static function render($request, Throwable $e)
    {
        return response()->json([
            'data' => null,
            'msg' => [
                'summary' => 'Example Exception',
                'detail' => '',
                'code' => '404',
            ]
        ], 404);
    }
}
