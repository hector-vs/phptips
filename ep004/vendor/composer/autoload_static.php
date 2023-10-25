<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf601cd320d3cd07e7942a40017f24d7b
{
    public static $files = array (
        'f0c19b8e56399867deb7b10046d19afe' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf601cd320d3cd07e7942a40017f24d7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf601cd320d3cd07e7942a40017f24d7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf601cd320d3cd07e7942a40017f24d7b::$classMap;

        }, null, ClassLoader::class);
    }
}