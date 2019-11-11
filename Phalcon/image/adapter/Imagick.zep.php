<?php

namespace Phalcon\Image\Adapter;

use Phalcon\Image\Adapter;
use Phalcon\Image\Exception;

/**
 * Phalcon\Image\Adapter\Imagick
 *
 * Image manipulation support. Allows images to be resized, cropped, etc.
 *
 * <code>
 * $image = new \Phalcon\Image\Adapter\Imagick("upload/test.jpg");
 *
 * $image->resize(200, 200)->rotate(90)->crop(100, 100);
 *
 * if ($image->save()) {
 *     echo "success";
 * }
 * </code>
 */
class Imagick extends Adapter
{

    static protected $_version = 0;


    static protected $_checked = false;


    /**
     * Checks if Imagick is enabled
     *
     * @return bool
     */
    public static function check(): bool
    {
    }

    /**
     * \Phalcon\Image\Adapter\Imagick constructor
     *
     * @param string $file
     * @param int $width
     * @param int $height
     */
    public function __construct(string $file, int $width = null, int $height = null)
    {
    }

    /**
     * Execute a resize.
     *
     * @param int $width
     * @param int $height
     */
    protected function _resize(int $width, int $height)
    {
    }

    /**
     * This method scales the images using liquid rescaling method. Only support Imagick
     *
     * @param int $width   new width
     * @param int $height  new height
     * @param int $deltaX How much the seam can traverse on x-axis. Passing 0 causes the seams to be straight.
     * @param int $rigidity Introduces a bias for non-straight seams. This parameter is typically 0.
     */
    protected function _liquidRescale(int $width, int $height, int $deltaX, int $rigidity)
    {
    }

    /**
     * Execute a crop.
     *
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     */
    protected function _crop(int $width, int $height, int $offsetX, int $offsetY)
    {
    }

    /**
     * Execute a rotation.
     *
     * @param int $degrees
     */
    protected function _rotate(int $degrees)
    {
    }

    /**
     * Execute a flip.
     *
     * @param int $direction
     */
    protected function _flip(int $direction)
    {
    }

    /**
     * Execute a sharpen.
     *
     * @param int $amount
     */
    protected function _sharpen(int $amount)
    {
    }

    /**
     * Execute a reflection.
     *
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     */
    protected function _reflection(int $height, int $opacity, bool $fadeIn)
    {
    }

    /**
     * Execute a watermarking.
     *
     * @param \Phalcon\Image\Adapter $image
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     */
    protected function _watermark(\Phalcon\Image\Adapter $image, int $offsetX, int $offsetY, int $opacity)
    {
    }

    /**
     * Execute a text
     *
     * @param string $text
     * @param mixed $offsetX
     * @param mixed $offsetY
     * @param int $opacity
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $size
     * @param string $fontfile
     */
    protected function _text(string $text, $offsetX, $offsetY, int $opacity, int $r, int $g, int $b, int $size, string $fontfile)
    {
    }

    /**
     * Composite one image onto another
     *
     * @param \Phalcon\Image\Adapter $image
     */
    protected function _mask(\Phalcon\Image\Adapter $image)
    {
    }

    /**
     * Execute a background.
     *
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $opacity
     */
    protected function _background(int $r, int $g, int $b, int $opacity)
    {
    }

    /**
     * Blur image
     *
     * @param int $radius Blur radius
     */
    protected function _blur(int $radius)
    {
    }

    /**
     * Pixelate image
     *
     * @param int $amount amount to pixelate
     */
    protected function _pixelate(int $amount)
    {
    }

    /**
     * Execute a save.
     *
     * @param string $file
     * @param int $quality
     */
    protected function _save(string $file, int $quality)
    {
    }

    /**
     * Execute a render.
     *
     * @param string $extension
     * @param int $quality
     * @return string
     */
    protected function _render(string $extension, int $quality): string
    {
    }

    /**
     * Destroys the loaded image to free up resources.
     */
    public function __destruct()
    {
    }

    /**
     * Get instance
     *
     * @return \Imagick
     */
    public function getInternalImInstance(): \Imagick
    {
    }

    /**
     * Sets the limit for a particular resource in megabytes
     *
     * @link http://php.net/manual/ru/imagick.constants.php#imagick.constants.resourcetypes
     * @param int $type
     * @param int $limit
     */
    public function setResourceLimit(int $type, int $limit)
    {
    }

}
