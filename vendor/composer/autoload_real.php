<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc2dc064ff5dfbd8ffa9b01524cb84d78
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

        spl_autoload_register(array('ComposerAutoloaderInitc2dc064ff5dfbd8ffa9b01524cb84d78', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc2dc064ff5dfbd8ffa9b01524cb84d78', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc2dc064ff5dfbd8ffa9b01524cb84d78::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}