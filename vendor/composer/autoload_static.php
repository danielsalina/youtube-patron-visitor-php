<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b801d1acf5f3f9d1e1cc4a1f9c4643
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Visitor\\' => 8,
        ),
        'P' => 
        array (
            'Product\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Visitor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Visitor',
        ),
        'Product\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Product',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3b801d1acf5f3f9d1e1cc4a1f9c4643::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3b801d1acf5f3f9d1e1cc4a1f9c4643::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3b801d1acf5f3f9d1e1cc4a1f9c4643::$classMap;

        }, null, ClassLoader::class);
    }
}
