<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9f5b82c95aa6614ae774e05f62d510c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9f5b82c95aa6614ae774e05f62d510c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9f5b82c95aa6614ae774e05f62d510c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9f5b82c95aa6614ae774e05f62d510c::$classMap;

        }, null, ClassLoader::class);
    }
}
