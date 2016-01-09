<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit233b91b3b81b73ad9db85892865a22f1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit233b91b3b81b73ad9db85892865a22f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit233b91b3b81b73ad9db85892865a22f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
