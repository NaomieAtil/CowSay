<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit905272eb3035dd8cd1a7f5c1e44a7cef
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit905272eb3035dd8cd1a7f5c1e44a7cef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit905272eb3035dd8cd1a7f5c1e44a7cef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit905272eb3035dd8cd1a7f5c1e44a7cef::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
