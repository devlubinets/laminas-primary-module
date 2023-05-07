<?php

namespace PrimaryModule\Request;

use PrimaryModule\Response\ResponseAbstract;

/**
 * Class RequestInterface
 *
 * @package PrimaryModule\Request\RequestInterface
 */
interface RequestInterface
{
    /**
     * @return ResponseAbstract
     */
    public function send(): ResponseAbstract;
}
