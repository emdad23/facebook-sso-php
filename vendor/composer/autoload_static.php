<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c2dd8bc15312aa7b3687a8e6198c62e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedDot\\FacebookSSO\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedDot\\FacebookSSO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FacebookSSO',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c2dd8bc15312aa7b3687a8e6198c62e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c2dd8bc15312aa7b3687a8e6198c62e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c2dd8bc15312aa7b3687a8e6198c62e::$classMap;

        }, null, ClassLoader::class);
    }
}
