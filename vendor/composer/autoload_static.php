<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93ebaeb921970a1ca65c6d144084fb91
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'ruzdev\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ruzdev\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit93ebaeb921970a1ca65c6d144084fb91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93ebaeb921970a1ca65c6d144084fb91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93ebaeb921970a1ca65c6d144084fb91::$classMap;

        }, null, ClassLoader::class);
    }
}
