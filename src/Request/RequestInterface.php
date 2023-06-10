<?php

namespace OrmModule\Request;

use OrmModule\Response\ResponseAbstract;

/**
 * Class RequestInterface
 *
 * @package OrmModule\Request\RequestInterface
 */
interface RequestInterface
{
    /**
     * @return ResponseAbstract
     */
    public function send(): ResponseAbstract;
}
