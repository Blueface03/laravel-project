<?php

//Load the laravel application
require __DIR__ . '/../vend0r/autoload.php';
$app = require_once __DIR__ . '/../boostrap/app.php';

// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);