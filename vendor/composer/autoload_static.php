<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5231f361827cc6beb856364ebcf1e86
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5231f361827cc6beb856364ebcf1e86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5231f361827cc6beb856364ebcf1e86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5231f361827cc6beb856364ebcf1e86::$classMap;

        }, null, ClassLoader::class);
    }
}
