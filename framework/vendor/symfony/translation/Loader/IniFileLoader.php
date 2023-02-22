<?php
namespace Symfony\Component\Translation\Loader;

/**
 * IniFileLoader loads translations from an ini file.
 *
 * @author stealth35
 */
class IniFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadResource(string $resource)
    {
        return parse_ini_file($resource, true);
    }
}
