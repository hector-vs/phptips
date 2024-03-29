<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec71270d400bc0e56d3563212cb1e91a
{
    public static $files = array (
        '10f6e9848a179d918589ca27bab40608' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec71270d400bc0e56d3563212cb1e91a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec71270d400bc0e56d3563212cb1e91a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec71270d400bc0e56d3563212cb1e91a::$classMap;

        }, null, ClassLoader::class);
    }
}
