<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9a0a3717f21278d2b5105caf3ec560e
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/options-resolver',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite9a0a3717f21278d2b5105caf3ec560e::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInite9a0a3717f21278d2b5105caf3ec560e::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInite9a0a3717f21278d2b5105caf3ec560e::$classMap;

        }, null, ClassLoader::class);
    }
}