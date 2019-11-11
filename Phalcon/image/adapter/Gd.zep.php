<?php

namespace Phalcon\Image\Adapter;

use Phalcon\Image\Adapter;
use Phalcon\Image\Exception;

class Gd extends Adapter
{

    static protected $_checked = false;


    /**
     * @return bool
     */
    public static function check(): bool
    {
    }

    /**
     * @param string $file
     * @param int $width
     * @param int $height
     */
    public function __construct(string $file, int $width = null, int $height = null)
    {
    }

    /**
     * @param int $width
     * @param int $height
     */
    protected function _resize(int $width, int $height)
    {
    }

    /**
     * @param int $width
     * @param int $height
     * @param int $offsetX
     * @param int $offsetY
     */
    protected function _crop(int $width, int $height, int $offsetX, int $offsetY)
    {
    }

    /**
     * @param int $degrees
     */
    protected function _rotate(int $degrees)
    {
    }

    /**
     * @param int $direction
     */
    protected function _flip(int $direction)
    {
    }

    /**
     * @param int $amount
     */
    protected function _sharpen(int $amount)
    {
    }

    /**
     * @param int $height
     * @param int $opacity
     * @param bool $fadeIn
     */
    protected function _reflection(int $height, int $opacity, bool $fadeIn)
    {
    }

    /**
     * @param \Phalcon\Image\Adapter $watermark
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     */
    protected function _watermark(\Phalcon\Image\Adapter $watermark, int $offsetX, int $offsetY, int $opacity)
    {
    }

    /**
     * @param string $text
     * @param int $offsetX
     * @param int $offsetY
     * @param int $opacity
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $size
     * @param string $fontfile
     */
    protected function _text(string $text, int $offsetX, int $offsetY, int $opacity, int $r, int $g, int $b, int $size, string $fontfile)
    {
    }

    /**
     * @param \Phalcon\Image\Adapter $mask
     */
    protected function _mask(\Phalcon\Image\Adapter $mask)
    {
    }

    /**
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $opacity
     */
    protected function _background(int $r, int $g, int $b, int $opacity)
    {
    }

    /**
     * @param int $radius
     */
    protected function _blur(int $radius)
    {
    }

    /**
     * @param int $amount
     */
    protected function _pixelate(int $amount)
    {
    }

    /**
     * @param string $file
     * @param int $quality
     */
    protected function _save(string $file, int $quality)
    {
    }

    /**
     * @param string $ext
     * @param int $quality
     */
    protected function _render(string $ext, int $quality)
    {
    }

    /**
     * @param int $width
     * @param int $height
     */
    protected function _create(int $width, int $height)
    {
    }


    public function __destruct()
    {
    }

}
