<?php

namespace Phalcon;

/**
 * Phalcon\EscaperInterface
 *
 * Interface for Phalcon\Escaper
 */
interface EscaperInterface
{

    /**
     * Sets the encoding to be used by the escaper
     *
     * @param string $encoding
     */
    public function setEncoding(string $encoding);

    /**
     * Returns the internal encoding used by the escaper
     *
     * @return string
     */
    public function getEncoding(): string;

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * @param int $quoteType
     */
    public function setHtmlQuoteType(int $quoteType);

    /**
     * Escapes a HTML string
     *
     * @param string $text
     * @return string
     */
    public function escapeHtml(string $text): string;

    /**
     * Escapes a HTML attribute string
     *
     * @param string $text
     * @return string
     */
    public function escapeHtmlAttr(string $text): string;

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their hexadecimal representation
     *
     * @param string $css
     * @return string
     */
    public function escapeCss(string $css): string;

    /**
     * Escape Javascript strings by replacing non-alphanumeric chars by their hexadecimal representation
     *
     * @param string $js
     * @return string
     */
    public function escapeJs(string $js): string;

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $url
     * @return string
     */
    public function escapeUrl(string $url): string;

}
