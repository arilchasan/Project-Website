<?php

// autoload_real.php @generated by Composer


class ComposerAutoloaderInit6596910d436766497281b23a15706d84
class ComposerAutoloaderInit1105262144b251c25cb17a415d325a7a

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

        require __DIR__ . '/platform_check.php';


        spl_autoload_register(array('ComposerAutoloaderInit6596910d436766497281b23a15706d84', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6596910d436766497281b23a15706d84', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6596910d436766497281b23a15706d84::getInitializer($loader));

        $loader->register(true);

        $filesToLoad = \Composer\Autoload\ComposerStaticInit6596910d436766497281b23a15706d84::$files;
        $requireFile = static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

                require $file;
            }
        };
        foreach ($filesToLoad as $fileIdentifier => $file) {
            ($requireFile)($fileIdentifier, $file);

        spl_autoload_register(array('ComposerAutoloaderInit1105262144b251c25cb17a415d325a7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1105262144b251c25cb17a415d325a7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1105262144b251c25cb17a415d325a7a::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit1105262144b251c25cb17a415d325a7a::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire1105262144b251c25cb17a415d325a7a($fileIdentifier, $file);

        }

        return $loader;
    }
}



/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire1105262144b251c25cb17a415d325a7a($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}

