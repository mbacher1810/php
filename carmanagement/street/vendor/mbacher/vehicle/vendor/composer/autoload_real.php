<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite66d9fdf304acc2a6dac72cb11a9648b
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

        spl_autoload_register(array('ComposerAutoloaderInite66d9fdf304acc2a6dac72cb11a9648b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite66d9fdf304acc2a6dac72cb11a9648b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite66d9fdf304acc2a6dac72cb11a9648b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
