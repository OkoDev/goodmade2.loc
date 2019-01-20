<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited75763d2b19b4d60ab79b7f62c46614
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'goodmade\\' => 9,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'goodmade\\' => 
        array (
            0 => __DIR__ . '/..' . '/goodmade/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited75763d2b19b4d60ab79b7f62c46614::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited75763d2b19b4d60ab79b7f62c46614::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
