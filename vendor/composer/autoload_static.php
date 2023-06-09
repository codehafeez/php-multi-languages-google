<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3e959bf342d5ce9eb398e23a7fb38b8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3e959bf342d5ce9eb398e23a7fb38b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3e959bf342d5ce9eb398e23a7fb38b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
