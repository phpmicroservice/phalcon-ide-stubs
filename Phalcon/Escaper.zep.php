<?php

namespace Phalcon;

use Phalcon\EscaperInterface;
use Phalcon\Escaper\Exception;

/**
 * Phalcon\Escaper
 *
 * Escapes different kinds of text securing them. By using this component you may
 * prevent XSS attacks.
 *
 * This component only works with UTF-8. The PREG extension needs to be compiled with UTF-8 support.
 *
 * <code>
 * $escaper = new \Phalcon\Escaper();
 *
 * $escaped = $escaper->escapeCss("font-family: <Verdana>");
 *
 * echo $escaped; // font\2D family\3A \20 \3C Verdana\3E
 * </code>
 */
class Escaper implements \Phalcon\EscaperInterface
{

    protected $_encoding = 'utf-8';


    protected $_htmlEscapeMap = null;


    protected $_htmlQuoteType = 3;


    protected $_doubleEncode = true;


    /**
     * Sets the encoding to be used by the escaper
     *
     * <code>
     * $escaper->setEncoding("utf-8");
     * </code>
     *
     * @param string $encoding
     */
    public function setEncoding(string $encoding)
    {
    }

    /**
     * Returns the internal encoding used by the escaper
     *
     * @return string
     */
    public function getEncoding(): string
    {
    }

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * <code>
     * $escaper->setHtmlQuoteType(ENT_XHTML);
     * </code>
     *
     * @param int $quoteType
     */
    public function setHtmlQuoteType(int $quoteType)
    {
    }

    /**
     * Sets the double_encode to be used by the escaper
     *
     * <code>
     * $escaper->setDoubleEncode(false);
     * </code>
     *
     * @param bool $doubleEncode
     */
    public function setDoubleEncode(bool $doubleEncode)
    {
    }

    /**
     * Detect the character encoding of a string to be handled by an encoder
     * Special-handling for chr(172) and chr(128) to chr(159) which fail to be detected by mb_detect_encoding()
     *
     * @param string $str
     * @return string|null
     */
    public final function detectEncoding(string $str): ?string
    {
    }

    /**
     * Utility to normalize a string's encoding to UTF-32.
     *
     * @param string $str
     * @return string
     */
    public final function normalizeEncoding(string $str): string
    {
    }

    /**
     * Escapes a HTML string. Internally uses htmlspecialchars
     *
     * @param string $text
     * @return string
     */
    public function escapeHtml(string $text): string
    {
    }

    /**
     * Escapes a HTML attribute string
     *
     * @param string $attribute
     * @return string
     */
    public function escapeHtmlAttr(string $attribute): string
    {
    }

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their hexadecimal escaped representation
     *
     * @param string $css
     * @return string
     */
    public function escapeCss(string $css): string
    {
    }

    /**
     * Escape javascript strings by replacing non-alphanumeric chars by their hexadecimal escaped representation
     *
     * @param string $js
     * @return string
     */
    public function escapeJs(string $js): string
    {
    }

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $url
     * @return string
     */
    public function escapeUrl(string $url): string
    {
    }

}
