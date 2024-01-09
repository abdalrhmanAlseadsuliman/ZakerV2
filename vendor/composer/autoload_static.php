<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c9f462ed3cfa1872996ee816f1d080e
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c9f462ed3cfa1872996ee816f1d080e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c9f462ed3cfa1872996ee816f1d080e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c9f462ed3cfa1872996ee816f1d080e::$classMap;

        }, null, ClassLoader::class);
    }
}