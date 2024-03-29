<?php

namespace Phalcon\Http;

use Phalcon\DiInterface;
use Phalcon\FilterInterface;
use Phalcon\Http\Request\File;
use Phalcon\Http\Request\Exception;
use Phalcon\Events\ManagerInterface;
use Phalcon\Di\InjectionAwareInterface;

/**
 * Phalcon\Http\Request
 *
 * Encapsulates request information for easy and secure access from application controllers.
 *
 * The request object is a simple value object that is passed between the dispatcher and controller classes.
 * It packages the HTTP request environment.
 *
 * <code>
 * use Phalcon\Http\Request;
 *
 * $request = new Request();
 *
 * if ($request->isPost() && $request->isAjax()) {
 *     echo "Request was made using POST and AJAX";
 * }
 *
 * $request->getServer("HTTP_HOST"); // Retrieve SERVER variables
 * $request->getMethod();            // GET, POST, PUT, DELETE, HEAD, OPTIONS, PATCH, PURGE, TRACE, CONNECT
 * $request->getLanguages();         // An array of languages the client accepts
 * </code>
 */
class Request implements Phalcon\Http\RequestInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $_dependencyInjector;


    protected $_rawBody;


    protected $_filter;


    protected $_putCache;


    protected $_httpMethodParameterOverride = false;


    protected $_strictHostCheck = false;



    public function getHttpMethodParameterOverride()
    {
    }

    /**
     * @param mixed $httpMethodParameterOverride
     */
    public function setHttpMethodParameterOverride($httpMethodParameterOverride)
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
    }

    /**
     * Returns the internal dependency injector
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Gets a variable from the $_REQUEST superglobal applying filters if needed.
     * If no parameters are given the $_REQUEST superglobal is returned
     *
     * <code>
     * // Returns value from $_REQUEST["user_email"] without sanitizing
     * $userEmail = $request->get("user_email");
     *
     * // Returns value from $_REQUEST["user_email"] with sanitizing
     * $userEmail = $request->get("user_email", "email");
     * </code>
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function get(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false)
    {
    }

    /**
     * Gets a variable from the $_POST superglobal applying filters if needed
     * If no parameters are given the $_POST superglobal is returned
     *
     * <code>
     * // Returns value from $_POST["user_email"] without sanitizing
     * $userEmail = $request->getPost("user_email");
     *
     * // Returns value from $_POST["user_email"] with sanitizing
     * $userEmail = $request->getPost("user_email", "email");
     * </code>
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPost(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false)
    {
    }

    /**
     * Gets a variable from put request
     *
     * <code>
     * // Returns value from $_PUT["user_email"] without sanitizing
     * $userEmail = $request->getPut("user_email");
     *
     * // Returns value from $_PUT["user_email"] with sanitizing
     * $userEmail = $request->getPut("user_email", "email");
     * </code>
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPut(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false)
    {
    }

    /**
     * Gets variable from $_GET superglobal applying filters if needed
     * If no parameters are given the $_GET superglobal is returned
     *
     * <code>
     * // Returns value from $_GET["id"] without sanitizing
     * $id = $request->getQuery("id");
     *
     * // Returns value from $_GET["id"] with sanitizing
     * $id = $request->getQuery("id", "int");
     *
     * // Returns value from $_GET["id"] with a default value
     * $id = $request->getQuery("id", null, 150);
     * </code>
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getQuery(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false)
    {
    }

    /**
     * Helper to get data from superglobals, applying filters if needed.
     * If no parameters are given the superglobal is returned.
     *
     * @param array $source
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    protected final function getHelper(array $source, string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false)
    {
    }

    /**
     * Gets variable from $_SERVER superglobal
     *
     * @param string $name
     * @return string|null
     */
    public function getServer(string $name): ?string
    {
    }

    /**
     * Checks whether $_REQUEST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Checks whether $_POST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPost(string $name): bool
    {
    }

    /**
     * Checks whether the PUT data has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPut(string $name): bool
    {
    }

    /**
     * Checks whether $_GET superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasQuery(string $name): bool
    {
    }

    /**
     * Checks whether $_SERVER superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public final function hasServer(string $name): bool
    {
    }

    /**
     * Checks whether headers has certain index
     *
     * @param string $header
     * @return bool
     */
    public final function hasHeader(string $header): bool
    {
    }

    /**
     * Gets HTTP header from request data
     *
     * @param string $header
     * @return string
     */
    public final function getHeader(string $header): string
    {
    }

    /**
     * Gets HTTP schema (http/https)
     *
     * @return string
     */
    public function getScheme(): string
    {
    }

    /**
     * Checks whether request has been made using ajax
     *
     * @return bool
     */
    public function isAjax(): bool
    {
    }

    /**
     * Checks whether request has been made using SOAP
     *
     * @return bool
     */
    public function isSoap(): bool
    {
    }

    /**
     * Alias of isSoap(). It will be deprecated in future versions
     *
     * @deprecated
     * @return bool
     */
    public function isSoapRequested(): bool
    {
    }

    /**
     * Checks whether request has been made using any secure layer
     *
     * @return bool
     */
    public function isSecure(): bool
    {
    }

    /**
     * Alias of isSecure(). It will be deprecated in future versions
     *
     * @deprecated
     * @return bool
     */
    public function isSecureRequest(): bool
    {
    }

    /**
     * Gets HTTP raw request body
     *
     * @return string
     */
    public function getRawBody(): string
    {
    }

    /**
     * Gets decoded JSON HTTP raw request body
     *
     * @param bool $associative
     * @return array|bool|\stdClass
     */
    public function getJsonRawBody(bool $associative = false)
    {
    }

    /**
     * Gets active server address IP
     *
     * @return string
     */
    public function getServerAddress(): string
    {
    }

    /**
     * Gets active server name
     *
     * @return string
     */
    public function getServerName(): string
    {
    }

    /**
     * Gets host name used by the request.
     *
     * `Request::getHttpHost` trying to find host name in following order:
     *
     * - `$_SERVER["HTTP_HOST"]`
     * - `$_SERVER["SERVER_NAME"]`
     * - `$_SERVER["SERVER_ADDR"]`
     *
     * Optionally `Request::getHttpHost` validates and clean host name.
     * The `Request::$_strictHostCheck` can be used to validate host name.
     *
     * Note: validation and cleaning have a negative performance impact because
     * they use regular expressions.
     *
     * <code>
     * use Phalcon\Http\Request;
     *
     * $request = new Request;
     *
     * $_SERVER["HTTP_HOST"] = "example.com";
     * $request->getHttpHost(); // example.com
     *
     * $_SERVER["HTTP_HOST"] = "example.com:8080";
     * $request->getHttpHost(); // example.com:8080
     *
     * $request->setStrictHostCheck(true);
     * $_SERVER["HTTP_HOST"] = "ex=am~ple.com";
     * $request->getHttpHost(); // UnexpectedValueException
     *
     * $_SERVER["HTTP_HOST"] = "ExAmPlE.com";
     * $request->getHttpHost(); // example.com
     * </code>
     *
     * @return string
     */
    public function getHttpHost(): string
    {
    }

    /**
     * Sets if the `Request::getHttpHost` method must be use strict validation of host name or not
     *
     * @param bool $flag
     * @return Request
     */
    public function setStrictHostCheck(bool $flag = true): Request
    {
    }

    /**
     * Checks if the `Request::getHttpHost` method will be use strict validation of host name or not
     *
     * @return bool
     */
    public function isStrictHostCheck(): bool
    {
    }

    /**
     * Gets information about the port on which the request is made.
     *
     * @return int
     */
    public function getPort(): int
    {
    }

    /**
     * Gets HTTP URI which request has been made
     *
     * @return string
     */
    public final function getURI(): string
    {
    }

    /**
     * Gets most possible client IPv4 Address. This method searches in
     * $_SERVER["REMOTE_ADDR"] and optionally in $_SERVER["HTTP_X_FORWARDED_FOR"]
     *
     * @param bool $trustForwardedHeader
     * @return string|bool
     */
    public function getClientAddress(bool $trustForwardedHeader = false)
    {
    }

    /**
     * Gets HTTP method which request has been made
     *
     * If the X-HTTP-Method-Override header is set, and if the method is a POST,
     * then it is used to determine the "real" intended HTTP method.
     *
     * The _method request parameter can also be used to determine the HTTP method,
     * but only if setHttpMethodParameterOverride(true) has been called.
     *
     * The method is always an uppercased string.
     *
     * @return string
     */
    public final function getMethod(): string
    {
    }

    /**
     * Gets HTTP user agent used to made the request
     *
     * @return string
     */
    public function getUserAgent(): string
    {
    }

    /**
     * Checks if a method is a valid HTTP method
     *
     * @param string $method
     * @return bool
     */
    public function isValidHttpMethod(string $method): bool
    {
    }

    /**
     * Check if HTTP method match any of the passed methods
     * When strict is true it checks if validated methods are real HTTP methods
     *
     * @param mixed $methods
     * @param bool $strict
     * @return bool
     */
    public function isMethod($methods, bool $strict = false): bool
    {
    }

    /**
     * Checks whether HTTP method is POST. if _SERVER["REQUEST_METHOD"]==="POST"
     *
     * @return bool
     */
    public function isPost(): bool
    {
    }

    /**
     * Checks whether HTTP method is GET. if _SERVER["REQUEST_METHOD"]==="GET"
     *
     * @return bool
     */
    public function isGet(): bool
    {
    }

    /**
     * Checks whether HTTP method is PUT. if _SERVER["REQUEST_METHOD"]==="PUT"
     *
     * @return bool
     */
    public function isPut(): bool
    {
    }

    /**
     * Checks whether HTTP method is PATCH. if _SERVER["REQUEST_METHOD"]==="PATCH"
     *
     * @return bool
     */
    public function isPatch(): bool
    {
    }

    /**
     * Checks whether HTTP method is HEAD. if _SERVER["REQUEST_METHOD"]==="HEAD"
     *
     * @return bool
     */
    public function isHead(): bool
    {
    }

    /**
     * Checks whether HTTP method is DELETE. if _SERVER["REQUEST_METHOD"]==="DELETE"
     *
     * @return bool
     */
    public function isDelete(): bool
    {
    }

    /**
     * Checks whether HTTP method is OPTIONS. if _SERVER["REQUEST_METHOD"]==="OPTIONS"
     *
     * @return bool
     */
    public function isOptions(): bool
    {
    }

    /**
     * Checks whether HTTP method is PURGE (Squid and Varnish support). if _SERVER["REQUEST_METHOD"]==="PURGE"
     *
     * @return bool
     */
    public function isPurge(): bool
    {
    }

    /**
     * Checks whether HTTP method is TRACE. if _SERVER["REQUEST_METHOD"]==="TRACE"
     *
     * @return bool
     */
    public function isTrace(): bool
    {
    }

    /**
     * Checks whether HTTP method is CONNECT. if _SERVER["REQUEST_METHOD"]==="CONNECT"
     *
     * @return bool
     */
    public function isConnect(): bool
    {
    }

    /**
     * Checks whether request include attached files
     *
     * @param bool $onlySuccessful
     * @return long
     */
    public function hasFiles(bool $onlySuccessful = false): int
    {
    }

    /**
     * Recursively counts file in an array of files
     *
     * @param mixed $data
     * @param bool $onlySuccessful
     * @return long
     */
    protected final function hasFileHelper($data, bool $onlySuccessful): int
    {
    }

    /**
     * Gets attached files as Phalcon\Http\Request\File instances
     *
     * @param bool $onlySuccessful
     * @return array|\Phalcon\Http\Request\FileInterface[]
     */
    public function getUploadedFiles(bool $onlySuccessful = false): array
    {
    }

    /**
     * Smooth out $_FILES to have plain array with all files uploaded
     *
     * @param array $names
     * @param array $types
     * @param array $tmp_names
     * @param array $sizes
     * @param array $errors
     * @param string $prefix
     * @return array
     */
    protected final function smoothFiles(array $names, array $types, array $tmp_names, array $sizes, array $errors, string $prefix): array
    {
    }

    /**
     * Returns the available headers in the request
     *
     * <code>
     * $_SERVER = [
     *     "PHP_AUTH_USER" => "phalcon",
     *     "PHP_AUTH_PW"   => "secret",
     * ];
     *
     * $headers = $request->getHeaders();
     *
     * echo $headers["Authorization"]; // Basic cGhhbGNvbjpzZWNyZXQ=
     * </code>
     *
     * @return array
     */
    public function getHeaders(): array
    {
    }

    /**
     * Resolve authorization headers.
     *
     * @return array
     */
    protected function resolveAuthorizationHeaders(): array
    {
    }

    /**
     * Gets web page that refers active request. ie: http://www.google.com
     *
     * @return string
     */
    public function getHTTPReferer(): string
    {
    }

    /**
     * Process a request header and return the one with best quality
     *
     * @param array $qualityParts
     * @param string $name
     * @return string
     */
    protected final function _getBestQuality(array $qualityParts, string $name): string
    {
    }

    /**
     * Gets content type which request has been made
     *
     * @return string|null
     */
    public function getContentType(): ?string
    {
    }

    /**
     * Gets an array with mime/types and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT"]
     *
     * @return array
     */
    public function getAcceptableContent(): array
    {
    }

    /**
     * Gets best mime/type accepted by the browser/client from _SERVER["HTTP_ACCEPT"]
     *
     * @return string
     */
    public function getBestAccept(): string
    {
    }

    /**
     * Gets a charsets array and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return array
     */
    public function getClientCharsets(): array
    {
    }

    /**
     * Gets best charset accepted by the browser/client from _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return string
     */
    public function getBestCharset(): string
    {
    }

    /**
     * Gets languages array and their quality accepted by the browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return array
     */
    public function getLanguages(): array
    {
    }

    /**
     * Gets best language accepted by the browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return string
     */
    public function getBestLanguage(): string
    {
    }

    /**
     * Gets auth info accepted by the browser/client from $_SERVER["PHP_AUTH_USER"]
     *
     * @return array|null
     */
    public function getBasicAuth(): ?array
    {
    }

    /**
     * Gets auth info accepted by the browser/client from $_SERVER["PHP_AUTH_DIGEST"]
     *
     * @return array
     */
    public function getDigestAuth(): array
    {
    }

    /**
     * Process a request header and return an array of values with their qualities
     *
     * @param string $serverIndex
     * @param string $name
     * @return array
     */
    protected final function _getQualityHeader(string $serverIndex, string $name): array
    {
    }

}
