<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit843735a5c94e720263ce8da51eb66cc0
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'bbf73f3db644d3dced353b837903e74c' => __DIR__ . '/..' . '/php-di/php-di/src/DI/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'L' => 
        array (
            'Lukana\\Tests\\' => 13,
            'Lukana\\Config\\' => 14,
            'Lukana\\' => 7,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DI\\Bridge\\Slim\\' => 15,
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Lukana\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Lukana\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'Lukana\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DI\\Bridge\\Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/slim-bridge/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src/DI',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit843735a5c94e720263ce8da51eb66cc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit843735a5c94e720263ce8da51eb66cc0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit843735a5c94e720263ce8da51eb66cc0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
