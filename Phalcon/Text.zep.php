<?php

namespace Phalcon;

/**
 * Phalcon\Text
 *
 * Provides utilities to work with texts
 */
abstract class Text
{

    const RANDOM_ALNUM = 0;


    const RANDOM_ALPHA = 1;


    const RANDOM_HEXDEC = 2;


    const RANDOM_NUMERIC = 3;


    const RANDOM_NOZERO = 4;


    const RANDOM_DISTINCT = 5;


    /**
     * Converts strings to camelize style
     *
     * <code>
     * echo Phalcon\Text::camelize("coco_bongo"); // CocoBongo
     * echo Phalcon\Text::camelize("co_co-bon_go", "-"); // Co_coBon_go
     * echo Phalcon\Text::camelize("co_co-bon_go", "_-"); // CoCoBonGo
     * </code>
     *
     * @param string $str
     * @param mixed $delimiter
     * @return string
     */
    public static function camelize(string $str, $delimiter = null): string
    {
    }

    /**
     * Uncamelize strings which are camelized
     *
     * <code>
     * echo Phalcon\Text::uncamelize("CocoBongo"); // coco_bongo
     * echo Phalcon\Text::uncamelize("CocoBongo", "-"); // coco-bongo
     * </code>
     *
     * @param string $str
     * @param mixed $delimiter
     * @return string
     */
    public static function uncamelize(string $str, $delimiter = null): string
    {
    }

    /**
     * Adds a number to a string or increment that number if it already is defined
     *
     * <code>
     * echo Phalcon\Text::increment("a"); // "a_1"
     * echo Phalcon\Text::increment("a_1"); // "a_2"
     * </code>
     *
     * @param string $str
     * @param string $separator
     * @return string
     */
    public static function increment(string $str, string $separator = '_'): string
    {
    }

    /**
     * Generates a random string based on the given type. Type is one of the RANDOM_ constants
     *
     * <code>
     * use Phalcon\Text;
     *
     * // "aloiwkqz"
     * echo Text::random(Text::RANDOM_ALNUM);
     * </code>
     *
     * @param int $type
     * @param long $length
     * @return string
     */
    public static function random(int $type = 0, int $length = 8): string
    {
    }

    /**
     * Check if a string starts with a given string
     *
     * <code>
     * echo Phalcon\Text::startsWith("Hello", "He"); // true
     * echo Phalcon\Text::startsWith("Hello", "he", false); // false
     * echo Phalcon\Text::startsWith("Hello", "he"); // true
     * </code>
     *
     * @param string $str
     * @param string $start
     * @param bool $ignoreCase
     * @return bool
     */
    public static function startsWith(string $str, string $start, bool $ignoreCase = true): bool
    {
    }

    /**
     * Check if a string ends with a given string
     *
     * <code>
     * echo Phalcon\Text::endsWith("Hello", "llo"); // true
     * echo Phalcon\Text::endsWith("Hello", "LLO", false); // false
     * echo Phalcon\Text::endsWith("Hello", "LLO"); // true
     * </code>
     *
     * @param string $str
     * @param string $end
     * @param bool $ignoreCase
     * @return bool
     */
    public static function endsWith(string $str, string $end, bool $ignoreCase = true): bool
    {
    }

    /**
     * Lowercases a string, this function makes use of the mbstring extension if available
     *
     * <code>
     * echo Phalcon\Text::lower("HELLO"); // hello
     * </code>
     *
     * @param string $str
     * @param string $encoding
     * @return string
     */
    public static function lower(string $str, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Uppercases a string, this function makes use of the mbstring extension if available
     *
     * <code>
     * echo Phalcon\Text::upper("hello"); // HELLO
     * </code>
     *
     * @param string $str
     * @param string $encoding
     * @return string
     */
    public static function upper(string $str, string $encoding = 'UTF-8'): string
    {
    }

    /**
     * Reduces multiple slashes in a string to single slashes
     *
     * <code>
     * echo Phalcon\Text::reduceSlashes("foo//bar/baz"); // foo/bar/baz
     * echo Phalcon\Text::reduceSlashes("http://foo.bar///baz/buz"); // http://foo.bar/baz/buz
     * </code>
     *
     * @param string $str
     * @return string
     */
    public static function reduceSlashes(string $str): string
    {
    }

    /**
     * Concatenates strings using the separator only once without duplication in places concatenation
     *
     * <code>
     * $str = Phalcon\Text::concat(
     *     "/",
     *     "/tmp/",
     *     "/folder_1/",
     *     "/folder_2",
     *     "folder_3/"
     * );
     *
     * // /tmp/folder_1/folder_2/folder_3/
     * echo $str;
     * </code>
     *
     * @param string $separator
     * @param string $a
     * @param string $b
     * @param string ...N
     * @param string  ...N
     * @return string
     */
    public static function concat(): string
    {
    }

    /**
     * Generates random text in accordance with the template
     *
     * <code>
     * // Hi my name is a Bob
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hi my name is a Jon
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Bob
     * echo Phalcon\Text::dynamic("{Hi|Hello}, my name is a {Bob|Mark|Jon}!");
     *
     * // Hello my name is a Zyxep
     * echo Phalcon\Text::dynamic("[Hi/Hello], my name is a [Zyxep/Mark]!", "[", "]", "/");
     * </code>
     *
     * @param string $text
     * @param string $leftDelimiter
     * @param string $rightDelimiter
     * @param string $separator
     * @return string
     */
    public static function dynamic(string $text, string $leftDelimiter = '{', string $rightDelimiter = '}', string $separator = '|'): string
    {
    }

    /**
     * Makes a phrase underscored instead of spaced
     *
     * <code>
     * echo Phalcon\Text::underscore("look behind"); // "look_behind"
     * echo Phalcon\Text::underscore("Awesome Phalcon"); // "Awesome_Phalcon"
     * </code>
     *
     * @param string $text
     * @return string
     */
    public static function underscore(string $text): string
    {
    }

    /**
     * Makes an underscored or dashed phrase human-readable
     *
     * <code>
     * echo Phalcon\Text::humanize("start-a-horse"); // "start a horse"
     * echo Phalcon\Text::humanize("five_cats"); // "five cats"
     * </code>
     *
     * @param string $text
     * @return string
     */
    public static function humanize(string $text): string
    {
    }

}
