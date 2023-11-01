<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb639e4b57eada592684092cec5d6e1cd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Poyrazenes\\OpenAiProfanityCheck\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Poyrazenes\\OpenAiProfanityCheck\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb639e4b57eada592684092cec5d6e1cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb639e4b57eada592684092cec5d6e1cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb639e4b57eada592684092cec5d6e1cd::$classMap;

        }, null, ClassLoader::class);
    }
}