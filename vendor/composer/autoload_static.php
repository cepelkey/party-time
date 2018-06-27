<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd70d3b30d3b1641fc1c4ae6ebd93af6e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atk4\\ui\\' => 8,
            'atk4\\schema\\' => 12,
            'atk4\\login\\' => 11,
            'atk4\\dsql\\' => 10,
            'atk4\\data\\' => 10,
            'atk4\\core\\' => 10,
        ),
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atk4\\ui\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/ui/src',
        ),
        'atk4\\schema\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/schema/src',
        ),
        'atk4\\login\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/login/src',
        ),
        'atk4\\dsql\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/dsql/src',
        ),
        'atk4\\data\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/data/src',
        ),
        'atk4\\core\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/core/src',
        ),
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd70d3b30d3b1641fc1c4ae6ebd93af6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd70d3b30d3b1641fc1c4ae6ebd93af6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
