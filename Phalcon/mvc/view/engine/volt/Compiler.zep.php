<?php

namespace Phalcon\Mvc\View\Engine\Volt;

use Phalcon\DiInterface;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\View\Engine\Volt\Exception;

/**
 * Phalcon\Mvc\View\Engine\Volt\Compiler
 *
 * This class reads and compiles Volt templates into PHP plain code
 *
 * <code>
 * $compiler = new \Phalcon\Mvc\View\Engine\Volt\Compiler();
 *
 * $compiler->compile("views/partials/header.volt");
 *
 * require $compiler->getCompiledTemplatePath();
 * </code>
 */
class Compiler implements \Phalcon\Di\InjectionAwareInterface
{

    protected $_dependencyInjector;


    protected $_view;


    protected $_options;


    protected $_arrayHelpers;


    protected $_level = 0;


    protected $_foreachLevel = 0;


    protected $_blockLevel = 0;


    protected $_exprLevel = 0;


    protected $_extended = false;


    protected $_autoescape = false;


    protected $_extendedBlocks;


    protected $_currentBlock;


    protected $_blocks;


    protected $_forElsePointers;


    protected $_loopPointers;


    protected $_extensions;


    protected $_functions;


    protected $_filters;


    protected $_macros;


    protected $_prefix;


    protected $_currentPath;


    protected $_compiledTemplatePath;


    /**
     * Phalcon\Mvc\View\Engine\Volt\Compiler
     *
     * @param \Phalcon\Mvc\ViewBaseInterface $view
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view = null)
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
     * Sets the compiler options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Sets a single compiler option
     *
     * @param string $option
     * @param mixed $value
     */
    public function setOption(string $option, $value)
    {
    }

    /**
     * Returns a compiler's option
     *
     * @param string $option
     * @return string
     */
    public function getOption(string $option)
    {
    }

    /**
     * Returns the compiler options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Fires an event to registered extensions
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public final function fireExtensionEvent(string $name, $arguments = null)
    {
    }

    /**
     * Registers a Volt's extension
     *
     * @param mixed $extension
     * @return Compiler
     */
    public function addExtension($extension): Compiler
    {
    }

    /**
     * Returns the list of extensions registered in Volt
     *
     * @return array
     */
    public function getExtensions(): array
    {
    }

    /**
     * Register a new function in the compiler
     *
     * @param string $name
     * @param mixed $definition
     * @return Compiler
     */
    public function addFunction(string $name, $definition): Compiler
    {
    }

    /**
     * Register the user registered functions
     *
     * @return array
     */
    public function getFunctions(): array
    {
    }

    /**
     * Register a new filter in the compiler
     *
     * @param string $name
     * @param mixed $definition
     * @return Compiler
     */
    public function addFilter(string $name, $definition): Compiler
    {
    }

    /**
     * Register the user registered filters
     *
     * @return array
     */
    public function getFilters(): array
    {
    }

    /**
     * Set a unique prefix to be used as prefix for compiled variables
     *
     * @param string $prefix
     * @return Compiler
     */
    public function setUniquePrefix(string $prefix): Compiler
    {
    }

    /**
     * Return a unique prefix to be used as prefix for compiled variables and contexts
     *
     * @return string
     */
    public function getUniquePrefix(): string
    {
    }

    /**
     * Resolves attribute reading
     *
     * @param array $expr
     * @return string
     */
    public function attributeReader(array $expr): string
    {
    }

    /**
     * Resolves function intermediate code into PHP function calls
     *
     * @param array $expr
     * @return string
     */
    public function functionCall(array $expr): string
    {
    }

    /**
     * Resolves filter intermediate code into a valid PHP expression
     *
     * @param array $test
     * @param string $left
     * @return string
     */
    public function resolveTest(array $test, string $left): string
    {
    }

    /**
     * Resolves filter intermediate code into PHP function calls
     *
     * @param array $filter
     * @param string $left
     * @return string
     */
    final protected function resolveFilter(array $filter, string $left): string
    {
    }

    /**
     * Resolves an expression node in an AST volt tree
     *
     * @param array $expr
     * @return string
     */
    final public function expression(array $expr): string
    {
    }

    /**
     * Compiles a block of statements
     *
     * @param array $statements
     * @return string|array
     */
    final protected function _statementListOrExtends($statements)
    {
    }

    /**
     * Compiles a "foreach" intermediate code representation into plain PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileForeach(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Generates a 'forelse' PHP code
     *
     * @return string
     */
    public function compileForElse(): string
    {
    }

    /**
     * Compiles a 'if' statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileIf(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a 'switch' statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileSwitch(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a "case"/"default" clause returning PHP code
     *
     * @param array $statement
     * @param bool $caseClause
     * @return string
     */
    public function compileCase(array $statement, bool $caseClause = true): string
    {
    }

    /**
     * Compiles a "elseif" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileElseIf(array $statement): string
    {
    }

    /**
     * Compiles a "cache" statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileCache(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a "set" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileSet(array $statement): string
    {
    }

    /**
     * Compiles a "do" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileDo(array $statement): string
    {
    }

    /**
     * Compiles a "return" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileReturn(array $statement): string
    {
    }

    /**
     * Compiles a "autoescape" statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileAutoEscape(array $statement, bool $extendsMode): string
    {
    }

    /**
     * Compiles a '{{' '}}' statement returning PHP code
     *
     * @param array $statement
     * @param boolean $extendsMode
     * @return string
     */
    public function compileEcho(array $statement): string
    {
    }

    /**
     * Compiles a 'include' statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileInclude(array $statement): string
    {
    }

    /**
     * Compiles macros
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileMacro(array $statement, bool $extendsMode): string
    {
    }

    /**
     * Compiles calls to macros
     *
     * @param array $statement
     * @param boolean $extendsMode
     * @return string
     */
    public function compileCall(array $statement, bool $extendsMode)
    {
    }

    /**
     * Traverses a statement list compiling each of its nodes
     *
     * @param array $statements
     * @param bool $extendsMode
     * @return string
     */
    final protected function _statementList(array $statements, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a Volt source code returning a PHP plain version
     *
     * @param string $viewCode
     * @param bool $extendsMode
     * @return string
     */
    protected function _compileSource(string $viewCode, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a template into a string
     *
     * <code>
     * echo $compiler->compileString('{{ "hello world" }}');
     * </code>
     *
     * @param string $viewCode
     * @param bool $extendsMode
     * @return string
     */
    public function compileString(string $viewCode, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a template into a file forcing the destination path
     *
     * <code>
     * $compiler->compileFile("views/layouts/main.volt", "views/layouts/main.volt.php");
     * </code>
     *
     * @param string $path
     * @param string $compiledPath
     * @param boolean $extendsMode
     * @return string|array
     */
    public function compileFile(string $path, string $compiledPath, bool $extendsMode = false)
    {
    }

    /**
     * Compiles a template into a file applying the compiler options
     * This method does not return the compiled path if the template was not compiled
     *
     * <code>
     * $compiler->compile("views/layouts/main.volt");
     *
     * require $compiler->getCompiledTemplatePath();
     * </code>
     *
     * @param string $templatePath
     * @param bool $extendsMode
     */
    public function compile(string $templatePath, bool $extendsMode = false)
    {
    }

    /**
     * Returns the path that is currently being compiled
     *
     * @return string
     */
    public function getTemplatePath(): string
    {
    }

    /**
     * Returns the path to the last compiled template
     *
     * @return string
     */
    public function getCompiledTemplatePath(): string
    {
    }

    /**
     * Parses a Volt template returning its intermediate representation
     *
     * <code>
     * print_r(
     *     $compiler->parse("{{ 3 + 2 }}")
     * );
     * </code>
     *
     * @param string $viewCode
     * @return array
     */
    public function parse(string $viewCode)
    {
    }

    /**
     * Gets the final path with VIEW
     *
     * @param string $path
     */
    protected function getFinalPath(string $path)
    {
    }

}
