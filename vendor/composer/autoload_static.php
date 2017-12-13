<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f4d8821f843b37caaa43155fd350ec3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f4d8821f843b37caaa43155fd350ec3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f4d8821f843b37caaa43155fd350ec3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}