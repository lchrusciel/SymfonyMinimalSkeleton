<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('prod', false);

$request = Request::createFromGlobals();

Request::enableHttpMethodParameterOverride();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);