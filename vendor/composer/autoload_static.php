<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e858e9d0e73855401eceb9e6d65c224
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Upgradepath\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Upgradepath\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Upgradepath\\Admin\\SettingsPage' => __DIR__ . '/../..' . '/src/Admin/SettingsPage.php',
        'Upgradepath\\Api\\ApiService' => __DIR__ . '/../..' . '/src/Api/ApiService.php',
        'Upgradepath\\Core' => __DIR__ . '/../..' . '/src/Core.php',
        'Upgradepath\\Cron\\Cronjob' => __DIR__ . '/../..' . '/src/Cron/Cronjob.php',
        'Upgradepath\\Cron\\CronjobScheduler' => __DIR__ . '/../..' . '/src/Cron/CronjobScheduler.php',
        'Upgradepath\\Cron\\SendPluginInformationCronjob' => __DIR__ . '/../..' . '/src/Cron/SendPluginInformationCronjob.php',
        'Upgradepath\\Service\\SyncService' => __DIR__ . '/../..' . '/src/Service/SyncService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e858e9d0e73855401eceb9e6d65c224::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e858e9d0e73855401eceb9e6d65c224::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e858e9d0e73855401eceb9e6d65c224::$classMap;

        }, null, ClassLoader::class);
    }
}
