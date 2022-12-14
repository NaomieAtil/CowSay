<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30af1f8c3523b1b78872026ddb168649
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Wcs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30af1f8c3523b1b78872026ddb168649::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30af1f8c3523b1b78872026ddb168649::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30af1f8c3523b1b78872026ddb168649::$classMap;

        }, null, ClassLoader::class);
    }
}
