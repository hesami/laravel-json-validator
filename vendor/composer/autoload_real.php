<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6ae6661ac0eb2833d2e004d52c6a4947
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit6ae6661ac0eb2833d2e004d52c6a4947', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6ae6661ac0eb2833d2e004d52c6a4947', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6ae6661ac0eb2833d2e004d52c6a4947::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
