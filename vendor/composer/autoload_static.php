<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb6ab49cbf20322754dbef11c0341b4a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb6ab49cbf20322754dbef11c0341b4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb6ab49cbf20322754dbef11c0341b4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
