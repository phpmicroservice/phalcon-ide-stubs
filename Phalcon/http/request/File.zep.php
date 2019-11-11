<?php

namespace Phalcon\Http\Request;

use Phalcon\Http\Request\FileInterface;

/**
 * Phalcon\Http\Request\File
 *
 * Provides OO wrappers to the $_FILES superglobal
 *
 * <code>
 * use Phalcon\Mvc\Controller;
 *
 * class PostsController extends Controller
 * {
 *     public function uploadAction()
 *     {
 *         // Check if the user has uploaded files
 *         if ($this->request->hasFiles() == true) {
 *             // Print the real file names and their sizes
 *             foreach ($this->request->getUploadedFiles() as $file) {
 *                 echo $file->getName(), " ", $file->getSize(), "\n";
 *             }
 *        }
 *     }
 * }
 * </code>
 */
class File implements \Phalcon\Http\Request\FileInterface
{

    protected $_name;


    protected $_tmp;


    protected $_size;


    protected $_type;


    protected $_realType;

    /**
     * @var string|null
     */
    protected $_error;

    /**
     * @var string|null
     */
    protected $_key;

    /**
     * @var string
     */
    protected $_extension;


    /**
     * @return string|null
     */
    public function getError(): ?string
    {
    }

    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
    }

    /**
     * Phalcon\Http\Request\File constructor
     *
     * @param array $file
     * @param mixed $key
     */
    public function __construct(array $file, $key = null)
    {
    }

    /**
     * Returns the file size of the uploaded file
     *
     * @return int
     */
    public function getSize(): int
    {
    }

    /**
     * Returns the real name of the uploaded file
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Returns the temporary name of the uploaded file
     *
     * @return string
     */
    public function getTempName(): string
    {
    }

    /**
     * Returns the mime type reported by the browser
     * This mime type is not completely secure, use getRealType() instead
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Gets the real mime type of the upload file using finfo
     *
     * @return string
     */
    public function getRealType(): string
    {
    }

    /**
     * Checks whether the file has been uploaded via Post.
     *
     * @return bool
     */
    public function isUploadedFile(): bool
    {
    }

    /**
     * Moves the temporary file to a destination within the application
     *
     * @param string $destination
     * @return bool
     */
    public function moveTo(string $destination): bool
    {
    }

}
