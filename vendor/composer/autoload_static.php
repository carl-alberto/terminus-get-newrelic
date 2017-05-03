<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5576996b877c621f14ac5928ae78266
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Pantheon\\TerminusGetNewrelic\\' => 29,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Pantheon\\TerminusGetNewrelic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'LucidFrame\\' => 
            array (
                0 => __DIR__ . '/..' . '/phplucidframe/console-table/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5576996b877c621f14ac5928ae78266::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5576996b877c621f14ac5928ae78266::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite5576996b877c621f14ac5928ae78266::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}