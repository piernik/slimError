<?php
declare(strict_types=1);

use Slim\Http\Response;

/** @var  $app Slim\App */

$app->get('/dummy/backend', function (Response $response) {
    return $response->withJson('backend works');
});

//$app->add(function (Request $request, Response $response, callable $next) {
//    $uri = $request->getUri();
//    $path = $uri->getPath();
//    $version = file_get_contents(__DIR__ . '/../../VERSION.md');
//    if (substr($path, 0, strlen($version) + 1) === '/' . $version) {
//        $uri = $uri->withPath(substr($path, strlen($version) + 1));
//
//        echo ' ';
//
//        return $next($request->withUri($uri), $response);
//    }
//
//    return $next($request, $response);
//});
//
//$router = new Router($app);
//$router->loadRoutes();

