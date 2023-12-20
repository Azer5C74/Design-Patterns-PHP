<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit934f5ca2303ebf7160412d67dd688b11
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'D' => 
        array (
            'Decorator\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Decorator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit934f5ca2303ebf7160412d67dd688b11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit934f5ca2303ebf7160412d67dd688b11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit934f5ca2303ebf7160412d67dd688b11::$classMap;

        }, null, ClassLoader::class);
    }
}
