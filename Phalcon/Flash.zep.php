<?php

namespace Phalcon;

use Phalcon\Flash\Exception;
use Phalcon\Di\InjectionAwareInterface;

/**
 * Phalcon\Flash
 *
 * Shows HTML notifications related to different circumstances. Classes can be stylized using CSS
 *
 * <code>
 * $flash->success("The record was successfully deleted");
 * $flash->error("Cannot open the file");
 * </code>
 */
abstract class Flash implements Phalcon\FlashInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $_cssClasses;


    protected $_implicitFlush = true;


    protected $_automaticHtml = true;


    protected $_escaperService = null;


    protected $_autoescape = true;


    protected $_dependencyInjector = null;


    protected $_messages;


    /**
     * Phalcon\Flash constructor
     *
     * @param mixed $cssClasses
     */
    public function __construct($cssClasses = null)
    {
    }

    /**
     * Returns the autoescape mode in generated html
     *
     * @return bool
     */
    public function getAutoescape(): bool
    {
    }

    /**
     * Set the autoescape mode in generated html
     *
     * @param bool $autoescape
     * @return Flash
     */
    public function setAutoescape(bool $autoescape): Flash
    {
    }

    /**
     * Returns the Escaper Service
     *
     * @return EscaperInterface
     */
    public function getEscaperService(): EscaperInterface
    {
    }

    /**
     * Sets the Escaper Service
     *
     * @param EscaperInterface $escaperService
     * @return Flash
     */
    public function setEscaperService(EscaperInterface $escaperService): Flash
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param DiInterface $dependencyInjector
     * @return Flash
     */
    public function setDI(DiInterface $dependencyInjector): Flash
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
     * Set whether the output must be implicitly flushed to the output or returned as string
     *
     * @param bool $implicitFlush
     * @return FlashInterface
     */
    public function setImplicitFlush(bool $implicitFlush): FlashInterface
    {
    }

    /**
     * Set if the output must be implicitly formatted with HTML
     *
     * @param bool $automaticHtml
     * @return FlashInterface
     */
    public function setAutomaticHtml(bool $automaticHtml): FlashInterface
    {
    }

    /**
     * Set an array with CSS classes to format the messages
     *
     * @param array $cssClasses
     * @return FlashInterface
     */
    public function setCssClasses(array $cssClasses): FlashInterface
    {
    }

    /**
     * Shows a HTML error message
     *
     * <code>
     * $flash->error("This is an error");
     * </code>
     *
     * @param mixed $message
     * @return string
     */
    public function error($message): string
    {
    }

    /**
     * Shows a HTML notice/information message
     *
     * <code>
     * $flash->notice("This is an information");
     * </code>
     *
     * @param mixed $message
     * @return string
     */
    public function notice($message): string
    {
    }

    /**
     * Shows a HTML success message
     *
     * <code>
     * $flash->success("The process was finished successfully");
     * </code>
     *
     * @param mixed $message
     * @return string
     */
    public function success($message): string
    {
    }

    /**
     * Shows a HTML warning message
     *
     * <code>
     * $flash->warning("Hey, this is important");
     * </code>
     *
     * @param mixed $message
     * @return string
     */
    public function warning($message): string
    {
    }

    /**
     * Outputs a message formatting it with HTML
     *
     * <code>
     * $flash->outputMessage("error", $message);
     * </code>
     *
     * @param string|array $message
     * @return string|void
     * @param string $type
     */
    public function outputMessage(string $type, $message)
    {
    }

    /**
     * Clears accumulated messages when implicit flush is disabled
     */
    public function clear()
    {
    }

}
