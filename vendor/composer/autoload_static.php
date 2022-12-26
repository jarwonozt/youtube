<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf52f0400539fb23158034191d76a3182
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jarwonozt\\Youtube\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jarwonozt\\Youtube\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf52f0400539fb23158034191d76a3182::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf52f0400539fb23158034191d76a3182::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf52f0400539fb23158034191d76a3182::$classMap;

        }, null, ClassLoader::class);
    }
}