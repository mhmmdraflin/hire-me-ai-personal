<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->trustProxies(at: '*');
        $middleware->validateCsrfTokens(except: [
            '/logout',
            '/check-cv'
        ]);
        $middleware->append(\Illuminate\Session\Middleware\StartSession::class);

        $middleware->alias([
            'usersession' => \App\Http\Middleware\UserSessionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {})
    ->create();
