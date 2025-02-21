<?php

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (InvalidArgumentException $e) {
            return response()->view('errors.400', ['message' => $e->getMessage()], 400);
        });
        $exceptions->render(function (NotFoundHttpException $e) {
            return response()->view('errors.404', ['message' => $e->getMessage()], 404);
        });
        $exceptions->render(function (DecryptException $e) {
            return response()->view('errors.400', ['message' => $e->getMessage()], 400);
        });
        $exceptions->render(function (ErrorException $e) {
            return response()->view('errors.400', ['message' => $e->getMessage()], 400);
        });
        $exceptions->render(function (QueryException $e) {
            return response()->view('errors.500', ['message' => $e->getMessage()], 500);
        });
    })->create();
