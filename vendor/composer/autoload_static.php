<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2afda0875f7fc6bd17dc92fbbad7ad79
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'NFePHP\\DA\\' => 10,
            'NFePHP\\Common\\' => 14,
        ),
        'D' => 
        array (
            'Danfe\\' => 6,
        ),
        'C' => 
        array (
            'Com\\Tecnick\\Color\\' => 18,
            'Com\\Tecnick\\Barcode\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'NFePHP\\DA\\' => 
        array (
            0 => __DIR__ . '/..' . '/nfephp-org/sped-da/src',
        ),
        'NFePHP\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/nfephp-org/sped-common/src',
        ),
        'Danfe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/generate',
        ),
        'Com\\Tecnick\\Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-color/src',
        ),
        'Com\\Tecnick\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/tecnickcom/tc-lib-barcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2afda0875f7fc6bd17dc92fbbad7ad79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2afda0875f7fc6bd17dc92fbbad7ad79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2afda0875f7fc6bd17dc92fbbad7ad79::$classMap;

        }, null, ClassLoader::class);
    }
}
