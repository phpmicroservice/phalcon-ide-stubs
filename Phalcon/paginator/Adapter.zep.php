<?php

namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\Adapter
 */
abstract class Adapter implements Phalcon\Paginator\AdapterInterface
{
    /**
     * Number of rows to show in the paginator. By default is null
     */
    protected $_limitRows = null;

    /**
     * Current page in paginate
     */
    protected $_page = null;


    /**
     * Get current rows limit
     *
     * @return int
     */
    public function getLimit(): int
    {
    }

    /**
     * Set the current page number
     *
     * @param int $page
     * @return Adapter
     */
    public function setCurrentPage(int $page): Adapter
    {
    }

    /**
     * Set current rows limit
     *
     * @param int $limitRows
     * @return Adapter
     */
    public function setLimit(int $limitRows): Adapter
    {
    }

}
