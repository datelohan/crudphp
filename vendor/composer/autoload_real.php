<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdb5c17f981f2acdb3c041d56a023bcf8
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

        spl_autoload_register(array('ComposerAutoloaderInitdb5c17f981f2acdb3c041d56a023bcf8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdb5c17f981f2acdb3c041d56a023bcf8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdb5c17f981f2acdb3c041d56a023bcf8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}