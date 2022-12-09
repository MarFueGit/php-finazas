<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb79525626f206402fc9183b6b8b7f8cb
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

        spl_autoload_register(array('ComposerAutoloaderInitb79525626f206402fc9183b6b8b7f8cb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb79525626f206402fc9183b6b8b7f8cb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb79525626f206402fc9183b6b8b7f8cb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
