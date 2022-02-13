<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ddc5a447abf78f17b809fa288669deb
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'devramdanewis\\' => 14,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'devramdanewis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ddc5a447abf78f17b809fa288669deb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ddc5a447abf78f17b809fa288669deb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ddc5a447abf78f17b809fa288669deb::$classMap;

        }, null, ClassLoader::class);
    }
}