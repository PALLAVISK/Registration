<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b7c7353afd74c3357461cdf05146af1
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pal\\login3\\' => 11,
        ),
        'R' => 
        array (
            'Rivsen\\Demo\\' => 12,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pal\\login3\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Rivsen\\Demo\\' => 
        array (
            0 => __DIR__ . '/..' . '/rivsen/hello-world/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b7c7353afd74c3357461cdf05146af1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b7c7353afd74c3357461cdf05146af1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
