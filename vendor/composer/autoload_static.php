<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ae6661ac0eb2833d2e004d52c6a4947
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hesami\\LaravelJsonValidator\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hesami\\LaravelJsonValidator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ae6661ac0eb2833d2e004d52c6a4947::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ae6661ac0eb2833d2e004d52c6a4947::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ae6661ac0eb2833d2e004d52c6a4947::$classMap;

        }, null, ClassLoader::class);
    }
}
