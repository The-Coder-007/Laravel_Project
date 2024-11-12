<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\http\Middleware\admin_afterLogin;
use App\http\Middleware\admin_beforLogin;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias([
            
            'admin_after' => \App\http\Middleware\admin_afterLogin::class,

            'admin_befor' => \App\http\Middleware\admin_beforLogin::class,
        
        ]);
        
    })

  
   

    ->withExceptions(function (Exceptions $exceptions) {
        
    })->create();
