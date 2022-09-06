<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit77eced5a5de1b0103bc3b4787340f79e
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

        spl_autoload_register(array('ComposerAutoloaderInit77eced5a5de1b0103bc3b4787340f79e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit77eced5a5de1b0103bc3b4787340f79e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit77eced5a5de1b0103bc3b4787340f79e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
