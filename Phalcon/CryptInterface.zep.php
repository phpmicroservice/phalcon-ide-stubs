<?php

namespace Phalcon;

/**
 * Phalcon\CryptInterface
 *
 * Interface for Phalcon\Crypt
 */
interface CryptInterface
{

    /**
     * Sets the cipher algorithm
     *
     * @param string $cipher
     * @return CryptInterface
     */
    public function setCipher(string $cipher): CryptInterface;

    /**
     * Returns the current cipher
     *
     * @return string
     */
    public function getCipher(): string;

    /**
     * Sets the encryption key
     *
     * @param string $key
     * @return CryptInterface
     */
    public function setKey(string $key): CryptInterface;

    /**
     * Returns the encryption key
     *
     * @return string
     */
    public function getKey(): string;

    /**
     * Encrypts a text
     *
     * @param string $text
     * @param string $key
     * @return string
     */
    public function encrypt(string $text, string $key = null): string;

    /**
     * Decrypts a text
     *
     * @param string $text
     * @param string $key
     * @return string
     */
    public function decrypt(string $text, string $key = null): string;

    /**
     * Encrypts a text returning the result as a base64 string
     *
     * @param string $text
     * @param mixed $key
     * @return string
     */
    public function encryptBase64(string $text, $key = null): string;

    /**
     * Decrypt a text that is coded as a base64 string
     *
     * @param string $text
     * @param mixed $key
     * @return string
     */
    public function decryptBase64(string $text, $key = null): string;

    /**
     * Returns a list of available cyphers
     *
     * @return array
     */
    public function getAvailableCiphers(): array;

}
