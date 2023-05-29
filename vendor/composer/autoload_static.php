<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc130c7a5ff5369e3f6129ae4cf61b17
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc130c7a5ff5369e3f6129ae4cf61b17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc130c7a5ff5369e3f6129ae4cf61b17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc130c7a5ff5369e3f6129ae4cf61b17::$classMap;

        }, null, ClassLoader::class);
    }
}