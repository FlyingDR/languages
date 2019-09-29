<?php

use Rinvex\Language\LanguageLoader;

if (! function_exists('language')) {
    /**
     * Get the language by it's ISO 639-1.
     *
     * @param string $code
     * @param bool $hydrate
     *
     * @return \Rinvex\Language\Language|array
     * @throws \Rinvex\Language\LanguageLoaderException
     */
    function language($code, $hydrate = true)
    {
        return LanguageLoader::language($code, $hydrate);
    }
}

if (! function_exists('languages')) {
    /**
     * Get all languages.
     *
     * @param bool $hydrate
     *
     * @return array
     * @throws \Rinvex\Language\LanguageLoaderException
     */
    function languages($hydrate = false)
    {
        return LanguageLoader::languages($hydrate);
    }
}

if (! function_exists('language_scripts')) {
    /**
     * Get all language scripts.
     *
     * @return array
     * @throws \Rinvex\Language\LanguageLoaderException
     */
    function language_scripts()
    {
        return LanguageLoader::scripts();
    }
}

if (! function_exists('language_families')) {
    /**
     * Get all language families.
     *
     * @return array
     * @throws \Rinvex\Language\LanguageLoaderException
     */
    function language_families()
    {
        return LanguageLoader::families();
    }
}
