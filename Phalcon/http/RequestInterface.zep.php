<?php

namespace Phalcon\Http;

/**
 * Phalcon\Http\RequestInterface
 *
 * Interface for Phalcon\Http\Request
 */
interface RequestInterface
{

    /**
     * Gets a variable from the $_REQUEST superglobal applying filters if needed
     *
     * @param string $name
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $name = null, $filters = null, $defaultValue = null);

    /**
     * Gets a variable from the $_POST superglobal applying filters if needed
     *
     * @param string $name
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getPost(string $name = null, $filters = null, $defaultValue = null);

    /**
     * Gets variable from $_GET superglobal applying filters if needed
     *
     * @param string $name
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getQuery(string $name = null, $filters = null, $defaultValue = null);

    /**
     * Gets variable from $_SERVER superglobal
     *
     * @param string $name
     * @return mixed
     */
    public function getServer(string $name);

    /**
     * Checks whether $_REQUEST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Checks whether $_POST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPost(string $name): bool;

    /**
     * Checks whether the PUT data has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPut(string $name): bool;

    /**
     * Checks whether $_GET superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasQuery(string $name): bool;

    /**
     * Checks whether $_SERVER superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasServer(string $name): bool;

    /**
     * Gets HTTP header from request data
     *
     * @param string $header
     * @return string
     */
    public function getHeader(string $header): string;

    /**
     * Gets HTTP schema (http/https)
     *
     * @return string
     */
    public function getScheme(): string;

    /**
     * Checks whether request has been made using ajax. Checks if $_SERVER["HTTP_X_REQUESTED_WITH"] === "XMLHttpRequest"
     *
     * @return bool
     */
    public function isAjax(): bool;

    /**
     * Checks whether request has been made using SOAP
     *
     * @return bool
     */
    public function isSoapRequested(): bool;

    /**
     * Checks whether request has been made using any secure layer
     *
     * @return bool
     */
    public function isSecureRequest(): bool;

    /**
     * Gets HTTP raw request body
     *
     * @return string
     */
    public function getRawBody(): string;

    /**
     * Gets active server address IP
     *
     * @return string
     */
    public function getServerAddress(): string;

    /**
     * Gets active server name
     *
     * @return string
     */
    public function getServerName(): string;

    /**
     * Gets host name used by the request
     *
     * @return string
     */
    public function getHttpHost(): string;

    /**
     * Gets information about the port on which the request is made
     *
     * @return int
     */
    public function getPort(): int;

    /**
     * Gets most possibly client IPv4 Address. This methods searches in
     * $_SERVER["REMOTE_ADDR"] and optionally in $_SERVER["HTTP_X_FORWARDED_FOR"]
     *
     * @param bool $trustForwardedHeader
     * @return string|bool
     */
    public function getClientAddress(bool $trustForwardedHeader = false);

    /**
     * Gets HTTP method which request has been made
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Gets HTTP user agent used to made the request
     *
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * Check if HTTP method match any of the passed methods
     *
     * @param string|array $methods
     * @return boolean
     * @param bool $strict
     */
    public function isMethod($methods, bool $strict = false): bool;

    /**
     * Checks whether HTTP method is POST. if $_SERVER["REQUEST_METHOD"] === "POST"
     *
     * @return bool
     */
    public function isPost(): bool;

    /**
     * Checks whether HTTP method is GET. if $_SERVER["REQUEST_METHOD"] === "GET"
     *
     * @return bool
     */
    public function isGet(): bool;

    /**
     * Checks whether HTTP method is PUT. if $_SERVER["REQUEST_METHOD"] === "PUT"
     *
     * @return bool
     */
    public function isPut(): bool;

    /**
     * Checks whether HTTP method is HEAD. if $_SERVER["REQUEST_METHOD"] === "HEAD"
     *
     * @return bool
     */
    public function isHead(): bool;

    /**
     * Checks whether HTTP method is DELETE. if $_SERVER["REQUEST_METHOD"] === "DELETE"
     *
     * @return bool
     */
    public function isDelete(): bool;

    /**
     * Checks whether HTTP method is OPTIONS. if $_SERVER["REQUEST_METHOD"] === "OPTIONS"
     *
     * @return bool
     */
    public function isOptions(): bool;

    /**
     * Checks whether HTTP method is PURGE (Squid and Varnish support). if $_SERVER["REQUEST_METHOD"] === "PURGE"
     *
     * @return bool
     */
    public function isPurge(): bool;

    /**
     * Checks whether HTTP method is TRACE. if $_SERVER["REQUEST_METHOD"] === "TRACE"
     *
     * @return bool
     */
    public function isTrace(): bool;

    /**
     * Checks whether HTTP method is CONNECT. if $_SERVER["REQUEST_METHOD"] === "CONNECT"
     *
     * @return bool
     */
    public function isConnect(): bool;

    /**
     * Checks whether request include attached files
     *
     * @param boolean $onlySuccessful
     * @return int
     */
    public function hasFiles(bool $onlySuccessful = false);

    /**
     * Gets attached files as Phalcon\Http\Request\FileInterface compatible instances
     *
     * @param bool $onlySuccessful
     * @return array|\Phalcon\Http\Request\FileInterface[]
     */
    public function getUploadedFiles(bool $onlySuccessful = false): array;

    /**
     * Gets web page that refers active request. ie: http://www.google.com
     *
     * @return string
     */
    public function getHTTPReferer(): string;

    /**
     * Gets array with mime/types and their quality accepted by the browser/client from $_SERVER["HTTP_ACCEPT"]
     *
     * @return array
     */
    public function getAcceptableContent(): array;

    /**
     * Gets best mime/type accepted by the browser/client from $_SERVER["HTTP_ACCEPT"]
     *
     * @return string
     */
    public function getBestAccept(): string;

    /**
     * Gets charsets array and their quality accepted by the browser/client from $_SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return array
     */
    public function getClientCharsets(): array;

    /**
     * Gets best charset accepted by the browser/client from $_SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return string
     */
    public function getBestCharset(): string;

    /**
     * Gets languages array and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return array
     */
    public function getLanguages(): array;

    /**
     * Gets best language accepted by the browser/client from $_SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return string
     */
    public function getBestLanguage(): string;

    /**
     * Gets auth info accepted by the browser/client from $_SERVER["PHP_AUTH_USER"]
     *
     * @return array
     */
    public function getBasicAuth();

    /**
     * Gets auth info accepted by the browser/client from $_SERVER["PHP_AUTH_DIGEST"]
     *
     * @return array
     */
    public function getDigestAuth(): array;

}
