<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd328c87c1dc6d139b90323607929271c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPattern\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd328c87c1dc6d139b90323607929271c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd328c87c1dc6d139b90323607929271c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
