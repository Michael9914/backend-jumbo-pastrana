<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
//        return parent::render($request, $e);

        if ($e instanceof ModelNotFound || $e instanceof ExampleException) {
            return ExampleException::render($request, $e);
        }

        if ($e instanceof NotFoundHttpException) {
//            return ModelNotFound::render($request);
            return response()->json([
                'msg' => [
                    'summary' => 'El registro del modelo no se encontró',
                    'detail' => '',
                    'code' => '500',
                ]
            ], 404);
        }

        return response()->json([
            'msg' => [
                'summary' => 'Error en el servidor',
                'detail' => '',
                'code' => '500',
            ]
        ], 500);
    }
}
