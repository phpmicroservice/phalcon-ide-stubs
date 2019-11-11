<?php

namespace Phalcon;

use Phalcon\CryptInterface;
use Phalcon\Crypt\Exception;
use Phalcon\Crypt\Mismatch;

/**
 * Phalcon\Crypt
 *
 * Provides encryption facilities to Phalcon applications.
 *
 * <code>
 * use Phalcon\Crypt;
 *
 * $crypt = new Crypt();
 *
 * $crypt->setCipher('aes-256-ctr');
 *
 * $key  = "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3";
 * $text = "The message to be encrypted";
 *
 * $encrypted = $crypt->encrypt($text, $key);
 *
 * echo $crypt->decrypt($encrypted, $key);
 * </code>
 */
class Crypt implements \Phalcon\CryptInterface
{

    const PADDING_DEFAULT = 0;


    const PADDING_ANSI_X_923 = 1;


    const PADDING_PKCS7 = 2;


    const PADDING_ISO_10126 = 3;


    const PADDING_ISO_IEC_7816_4 = 4;


    const PADDING_ZERO = 5;


    const PADDING_SPACE = 6;


    protected $_key;


    protected $_padding = 0;


    protected $_cipher = 'aes-256-cfb';

    /**
     * Available cipher methods.
     *
     * @var array
     */
    protected $availableCiphers;

    /**
     * The cipher iv length.
     *
     * @var int
     */
    protected $ivLength = 16;

    /**
     * The name of hashing algorithm.
     *
     * @var string
     */
    protected $hashAlgo = 'sha256';

    /**
     * Whether calculating message digest enabled or not.
     * NOTE: This feature will be enabled by default in Phalcon 4.0.0
     *
     * @var bool
     */
    protected $useSigning = false;


    /**
     * Phalcon\Crypt constructor.
     *
     * @param string $cipher
     * @param bool $useSigning
     */
    public function __construct(string $cipher = 'aes-256-cfb', bool $useSigning = false)
    {
    }

    /**
     * Changes the padding scheme used.
     *
     * @param int $scheme
     * @return CryptInterface
     */
    public function setPadding(int $scheme): CryptInterface
    {
    }

    /**
     * Sets the cipher algorithm for data encryption and decryption.
     *
     * The `aes-256-gcm' is the preferable cipher, but it is not usable
     * until the openssl library is upgraded, which is available in PHP 7.1.
     *
     * The `aes-256-ctr' is arguably the best choice for cipher
     * algorithm for current openssl library version.
     *
     * @param string $cipher
     * @return CryptInterface
     */
    public function setCipher(string $cipher): CryptInterface
    {
    }

    /**
     * Returns the current cipher
     *
     * @return string
     */
    public function getCipher(): string
    {
    }

    /**
     * Sets the encryption key.
     *
     * The `$key' should have been previously generated in a cryptographically safe way.
     *
     * Bad key:
     * "le password"
     *
     * Better (but still unsafe):
     * "#1dj8$=dp?.ak//j1V$~%0X"
     *
     * Good key:
     * "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     *
     * @see \Phalcon\Security\Random
     * @param string $key
     * @return CryptInterface
     */
    public function setKey(string $key): CryptInterface
    {
    }

    /**
     * Returns the encryption key
     *
     * @return string
     */
    public function getKey(): string
    {
    }

    /**
     * Set the name of hashing algorithm.
     *
     * @throws \Phalcon\Crypt\Exception
     * @param string $hashAlgo
     * @return Crypt
     */
    public function setHashAlgo(string $hashAlgo): Crypt
    {
    }

    /**
     * Get the name of hashing algorithm.
     *
     * @return string
     */
    public function getHashAlgo(): string
    {
    }

    /**
     * Sets if the calculating message digest must used.
     *
     * NOTE: This feature will be enabled by default in Phalcon 4.0.0
     *
     * @param bool $useSigning
     * @return Crypt
     */
    public function useSigning(bool $useSigning): Crypt
    {
    }

    /**
     * Pads texts before encryption.
     *
     * @link http://www.di-mgt.com.au/cryptopad.html
     * @param string $text
     * @param string $mode
     * @param int $blockSize
     * @param int $paddingType
     */
    protected function _cryptPadText(string $text, string $mode, int $blockSize, int $paddingType)
    {
    }

    /**
     * Removes a padding from a text.
     *
     * If the function detects that the text was not padded, it will return it unmodified.
     *
     * @param string $text Message to be unpadded
     * @param string $mode Encryption mode; unpadding is applied only in CBC or ECB mode
     * @param int $blockSize Cipher block size
     * @param int $paddingType Padding scheme
     */
    protected function _cryptUnpadText(string $text, string $mode, int $blockSize, int $paddingType)
    {
    }

    /**
     * Encrypts a text.
     *
     * <code>
     * $encrypted = $crypt->encrypt(
     *     "Top secret",
     *     "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     * );
     * </code>
     *
     * @param string $text
     * @param string $key
     * @return string
     */
    public function encrypt(string $text, string $key = null): string
    {
    }

    /**
     * Decrypts an encrypted text.
     *
     * <code>
     * $encrypted = $crypt->decrypt(
     *     $encrypted,
     *     "T4\xb1\x8d\xa9\x98\x05\\\x8c\xbe\x1d\x07&[\x99\x18\xa4~Lc1\xbeW\xb3"
     * );
     * </code>
     *
     * @throws \Phalcon\Crypt\Mismatch
     * @param string $text
     * @param string $key
     * @return string
     */
    public function decrypt(string $text, string $key = null): string
    {
    }

    /**
     * Encrypts a text returning the result as a base64 string.
     *
     * @param string $text
     * @param mixed $key
     * @param bool $safe
     * @return string
     */
    public function encryptBase64(string $text, $key = null, bool $safe = false): string
    {
    }

    /**
     * Decrypt a text that is coded as a base64 string.
     *
     * @throws \Phalcon\Crypt\Mismatch
     * @param string $text
     * @param mixed $key
     * @param bool $safe
     * @return string
     */
    public function decryptBase64(string $text, $key = null, bool $safe = false): string
    {
    }

    /**
     * Returns a list of available ciphers.
     *
     * @return array
     */
    public function getAvailableCiphers(): array
    {
    }

    /**
     * Return a list of registered hashing algorithms suitable for hash_hmac.
     *
     * @return array
     */
    public function getAvailableHashAlgos(): array
    {
    }

    /**
     * Assert the cipher is available.
     *
     * @throws \Phalcon\Crypt\Exception
     * @param string $cipher
     */
    protected function assertCipherIsAvailable(string $cipher)
    {
    }

    /**
     * Assert the hash algorithm is available.
     *
     * @throws \Phalcon\Crypt\Exception
     * @param string $hashAlgo
     */
    protected function assertHashAlgorithmAvailable(string $hashAlgo)
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @throws \Phalcon\Crypt\Exception
     * @param string $cipher
     * @return int
     */
    protected function getIvLength(string $cipher): int
    {
    }

    /**
     * Initialize available cipher algorithms.
     *
     * @throws \Phalcon\Crypt\Exception
     */
    protected function initializeAvailableCiphers()
    {
    }

}
