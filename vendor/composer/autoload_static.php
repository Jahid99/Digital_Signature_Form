<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06671e35d7c3c560606e154345a05a3d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06671e35d7c3c560606e154345a05a3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06671e35d7c3c560606e154345a05a3d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}