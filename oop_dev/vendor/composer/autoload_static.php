<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit400456850e4ff7368545ac9d0a0380f5
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit400456850e4ff7368545ac9d0a0380f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit400456850e4ff7368545ac9d0a0380f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit400456850e4ff7368545ac9d0a0380f5::$classMap;

        }, null, ClassLoader::class);
    }
}