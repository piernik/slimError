<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Lukana\PhpDi\ConfigKlienta;

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

$app = new class() extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
//        $builder->useAnnotations(true);
//        $builder->addDefinitions(__DIR__ . '/../config/Slim/settings.php');
//        $paths = require __DIR__ . '/../config/PhpDi/paths.php';
//        foreach ($paths AS $path) {
//            $builder->addDefinitions($path);
//        }
//        $configKlienta = new ConfigKlienta();
//        $builder->addDefinitions($configKlienta->build());
    }
};
require __DIR__ . '/../src/routes.php';

$app->run();
