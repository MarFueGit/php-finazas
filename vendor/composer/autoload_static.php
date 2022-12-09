<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb79525626f206402fc9183b6b8b7f8cb
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/router',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb79525626f206402fc9183b6b8b7f8cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb79525626f206402fc9183b6b8b7f8cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb79525626f206402fc9183b6b8b7f8cb::$classMap;

        }, null, ClassLoader::class);
    }
}
