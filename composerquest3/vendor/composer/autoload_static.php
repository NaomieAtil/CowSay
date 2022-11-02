<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit905272eb3035dd8cd1a7f5c1e44a7cef
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit905272eb3035dd8cd1a7f5c1e44a7cef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit905272eb3035dd8cd1a7f5c1e44a7cef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit905272eb3035dd8cd1a7f5c1e44a7cef::$classMap;

        }, null, ClassLoader::class);
    }
}
