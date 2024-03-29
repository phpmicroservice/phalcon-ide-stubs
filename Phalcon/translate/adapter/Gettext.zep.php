<?php

namespace Phalcon\Translate\Adapter;

use Phalcon\Translate\Exception;
use Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\Adapter\Gettext
 *
 * <code>
 * use Phalcon\Translate\Adapter\Gettext;
 *
 * $adapter = new Gettext(
 *     [
 *         "locale"        => "de_DE.UTF-8",
 *         "defaultDomain" => "translations",
 *         "directory"     => "/path/to/application/locales",
 *         "category"      => LC_MESSAGES,
 *     ]
 * );
 * </code>
 *
 * Allows translate using gettext
 */
class Gettext extends Adapter implements ArrayAccess
{
    /**
     * @var string|array
     */
    protected $_directory;

    /**
     * @var string
     */
    protected $_defaultDomain;

    /**
     * @var string
     */
    protected $_locale;

    /**
     * @var int
     */
    protected $_category;


    /**
     * @return string|array
     */
    public function getDirectory()
    {
    }

    /**
     * @return string
     */
    public function getDefaultDomain(): string
    {
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
    }

    /**
     * Phalcon\Translate\Adapter\Gettext constructor
     *
     * @param array $options
     */
    public function __construct(array $options)
    {
    }

    /**
     * Returns the translation related to the given key.
     *
     * <code>
     * $translator->query("你好 %name%！", ["name" => "Phalcon"]);
     * </code>
     *
     * @param string $index
     * @param mixed $placeholders
     * @return string
     */
    public function query(string $index, $placeholders = null): string
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

    /**
     * The plural version of gettext().
     * Some languages have more than one form for plural messages dependent on the count.
     *
     * @param string $msgid1
     * @param string $msgid2
     * @param int $count
     * @param mixed $placeholders
     * @param string $domain
     * @return string
     */
    public function nquery(string $msgid1, string $msgid2, int $count, $placeholders = null, string $domain = null): string
    {
    }

    /**
     * Changes the current domain (i.e. the translation file)
     *
     * @param mixed $domain
     * @return string
     */
    public function setDomain($domain): string
    {
    }

    /**
     * Sets the default domain
     *
     * @return string
     */
    public function resetDomain(): string
    {
    }

    /**
     * Sets the domain default to search within when calls are made to gettext()
     *
     * @param string $domain
     */
    public function setDefaultDomain(string $domain)
    {
    }

    /**
     * Sets the path for a domain
     *
     * <code>
     * // Set the directory path
     * $gettext->setDirectory("/path/to/the/messages");
     *
     * // Set the domains and directories path
     * $gettext->setDirectory(
     *     [
     *         "messages" => "/path/to/the/messages",
     *         "another"  => "/path/to/the/another",
     *     ]
     * );
     * </code>
     *
     * @param string|array $directory The directory path or an array of directories and domains
     */
    public function setDirectory($directory)
    {
    }

    /**
     * Sets locale information
     *
     * <code>
     * // Set locale to Dutch
     * $gettext->setLocale(LC_ALL, "nl_NL");
     *
     * // Try different possible locale names for german
     * $gettext->setLocale(LC_ALL, "de_DE@euro", "de_DE", "de", "ge");
     * </code>
     *
     * @param int $category
     * @param string $locale
     * @return string|bool
     */
    public function setLocale(int $category, string $locale)
    {
    }

    /**
     * Validator for constructor
     *
     * @param array $options
     */
    protected function prepareOptions(array $options)
    {
    }

    /**
     * Gets default options
     *
     * @return array
     */
    protected function getOptionsDefault(): array
    {
    }

}
