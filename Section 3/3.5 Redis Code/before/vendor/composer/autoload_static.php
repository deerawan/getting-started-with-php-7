<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f22cade99deb617b35f1e9e579e5393
{
    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Galvani/Redis' => 
            array (
                0 => __DIR__ . '/..' . '/galvani/php-redis',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2f22cade99deb617b35f1e9e579e5393::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
