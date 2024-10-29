<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite700d1aa3a18a1e07d627f0ffb9d1bf6
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kshopov\\SmsTestPackage\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kshopov\\SmsTestPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite700d1aa3a18a1e07d627f0ffb9d1bf6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite700d1aa3a18a1e07d627f0ffb9d1bf6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite700d1aa3a18a1e07d627f0ffb9d1bf6::$classMap;

        }, null, ClassLoader::class);
    }
}