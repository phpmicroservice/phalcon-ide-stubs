<?php

namespace Phalcon\Http;

use Phalcon\DiInterface;
use Phalcon\Http\Response\Exception;
use Phalcon\Http\Response\HeadersInterface;
use Phalcon\Http\Response\CookiesInterface;
use Phalcon\Mvc\UrlInterface;
use Phalcon\Mvc\ViewInterface;
use Phalcon\Http\Response\Headers;
use Phalcon\Di\InjectionAwareInterface;

/**
 * Phalcon\Http\Response
 *
 * Part of the HTTP cycle is return responses to the clients.
 * Phalcon\HTTP\Response is the Phalcon component responsible to achieve this task.
 * HTTP responses are usually composed by headers and body.
 *
 * <code>
 * $response = new \Phalcon\Http\Response();
 *
 * $response->setStatusCode(200, "OK");
 * $response->setContent("<html><body>Hello</body></html>");
 *
 * $response->send();
 * </code>
 */
class Response implements Phalcon\Http\ResponseInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $_sent = false;


    protected $_content;


    protected $_headers;


    protected $_cookies;


    protected $_file;


    protected $_dependencyInjector;


    /**
     * Phalcon\Http\Response constructor
     *
     * @param mixed $content
     * @param mixed $code
     * @param mixed $status
     */
    public function __construct($content = null, $code = null, $status = null)
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
     * Sets the HTTP response code
     *
     * <code>
     * $response->setStatusCode(404, "Not Found");
     * </code>
     *
     * @param int $code
     * @param string $message
     * @return ResponseInterface
     */
    public function setStatusCode(int $code, string $message = null): ResponseInterface
    {
    }

    /**
     * Returns the status code
     *
     * <code>
     * echo $response->getStatusCode();
     * </code>
     *
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
    }

    /**
     * Returns the reason phrase
     *
     * <code>
     * echo $response->getReasonPhrase();
     * </code>
     *
     * @return string|null
     */
    public function getReasonPhrase(): ?string
    {
    }

    /**
     * Sets a headers bag for the response externally
     *
     * @param \Phalcon\Http\Response\HeadersInterface $headers
     * @return ResponseInterface
     */
    public function setHeaders(\Phalcon\Http\Response\HeadersInterface $headers): ResponseInterface
    {
    }

    /**
     * Returns headers set by the user
     *
     * @return HeadersInterface
     */
    public function getHeaders(): HeadersInterface
    {
    }

    /**
     * Sets a cookies bag for the response externally
     *
     * @param \Phalcon\Http\Response\CookiesInterface $cookies
     * @return Response
     */
    public function setCookies(\Phalcon\Http\Response\CookiesInterface $cookies): Response
    {
    }

    /**
     * Returns cookies set by the user
     *
     * @return \Phalcon\Http\Response\CookiesInterface
     */
    public function getCookies(): CookiesInterface
    {
    }

    /**
     * Overwrites a header in the response
     *
     * <code>
     * $response->setHeader("Content-Type", "text/plain");
     * </code>
     *
     * @param string $name
     * @param mixed $value
     * @return ResponseInterface
     */
    public function setHeader(string $name, $value): ResponseInterface
    {
    }

    /**
     * Send a raw header to the response
     *
     * <code>
     * $response->setRawHeader("HTTP/1.1 404 Not Found");
     * </code>
     *
     * @param string $header
     * @return ResponseInterface
     */
    public function setRawHeader(string $header): ResponseInterface
    {
    }

    /**
     * Resets all the established headers
     *
     * @return ResponseInterface
     */
    public function resetHeaders(): ResponseInterface
    {
    }

    /**
     * Sets an Expires header in the response that allows to use the HTTP cache
     *
     * <code>
     * $this->response->setExpires(
     *     new DateTime()
     * );
     * </code>
     *
     * @param \DateTime $datetime
     * @return ResponseInterface
     */
    public function setExpires(\DateTime $datetime): ResponseInterface
    {
    }

    /**
     * Sets Last-Modified header
     *
     * <code>
     * $this->response->setLastModified(
     *     new DateTime()
     * );
     * </code>
     *
     * @param \DateTime $datetime
     * @return Response
     */
    public function setLastModified(\DateTime $datetime): Response
    {
    }

    /**
     * Sets Cache headers to use HTTP cache
     *
     * <code>
     * $this->response->setCache(60);
     * </code>
     *
     * @param int $minutes
     * @return Response
     */
    public function setCache(int $minutes): Response
    {
    }

    /**
     * Sends a Not-Modified response
     *
     * @return ResponseInterface
     */
    public function setNotModified(): ResponseInterface
    {
    }

    /**
     * Sets the response content-type mime, optionally the charset
     *
     * <code>
     * $response->setContentType("application/pdf");
     * $response->setContentType("text/plain", "UTF-8");
     * </code>
     *
     * @param string $contentType
     * @param mixed $charset
     * @return ResponseInterface
     */
    public function setContentType(string $contentType, $charset = null): ResponseInterface
    {
    }

    /**
     * Sets the response content-length
     *
     * <code>
     * $response->setContentLength(2048);
     * </code>
     *
     * @param int $contentLength
     * @return ResponseInterface
     */
    public function setContentLength(int $contentLength): ResponseInterface
    {
    }

    /**
     * Set a custom ETag
     *
     * <code>
     * $response->setEtag(md5(time()));
     * </code>
     *
     * @param string $etag
     * @return Response
     */
    public function setEtag(string $etag): Response
    {
    }

    /**
     * Redirect by HTTP to another action or URL
     *
     * <code>
     * // Using a string redirect (internal/external)
     * $response->redirect("posts/index");
     * $response->redirect("http://en.wikipedia.org", true);
     * $response->redirect("http://www.example.com/new-location", true, 301);
     *
     * // Making a redirection based on a named route
     * $response->redirect(
     *     [
     *         "for"        => "index-lang",
     *         "lang"       => "jp",
     *         "controller" => "index",
     *     ]
     * );
     * </code>
     *
     * @param mixed $location
     * @param bool $externalRedirect
     * @param int $statusCode
     * @return ResponseInterface
     */
    public function redirect($location = null, bool $externalRedirect = false, int $statusCode = 302): ResponseInterface
    {
    }

    /**
     * Sets HTTP response body
     *
     * <code>
     * $response->setContent("<h1>Hello!</h1>");
     * </code>
     *
     * @param string $content
     * @return ResponseInterface
     */
    public function setContent(string $content): ResponseInterface
    {
    }

    /**
     * Sets HTTP response body. The parameter is automatically converted to JSON
     * and also sets default header: Content-Type: "application/json; charset=UTF-8"
     *
     * <code>
     * $response->setJsonContent(
     *     [
     *         "status" => "OK",
     *     ]
     * );
     * </code>
     *
     * @param mixed $content
     * @param int $jsonOptions
     * @param int $depth
     * @return ResponseInterface
     */
    public function setJsonContent($content, int $jsonOptions = 0, int $depth = 512): ResponseInterface
    {
    }

    /**
     * Appends a string to the HTTP response body
     *
     * @param mixed $content
     * @return ResponseInterface
     */
    public function appendContent($content): ResponseInterface
    {
    }

    /**
     * Gets the HTTP response body
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Check if the response is already sent
     *
     * @return bool
     */
    public function isSent(): bool
    {
    }

    /**
     * Sends headers to the client
     *
     * @return ResponseInterface
     */
    public function sendHeaders(): ResponseInterface
    {
    }

    /**
     * Sends cookies to the client
     *
     * @return ResponseInterface
     */
    public function sendCookies(): ResponseInterface
    {
    }

    /**
     * Prints out HTTP response to the client
     *
     * @return ResponseInterface
     */
    public function send(): ResponseInterface
    {
    }

    /**
     * Sets an attached file to be sent at the end of the request
     *
     * @param string $filePath
     * @param mixed $attachmentName
     * @param mixed $attachment
     * @return ResponseInterface
     */
    public function setFileToSend(string $filePath, $attachmentName = null, $attachment = true): ResponseInterface
    {
    }

    /**
     * Remove a header in the response
     *
     * <code>
     * $response->removeHeader("Expires");
     * </code>
     *
     * @param string $name
     * @return Response
     */
    public function removeHeader(string $name): Response
    {
    }

}
