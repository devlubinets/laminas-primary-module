<?php

namespace AuthModule\Request;

use AuthModule\Response\ResponseAbstract;

/**
 * Class RequestInterface
 *
 * @package AuthModule\Request\RequestInterface
 */
interface RequestInterface
{
    /**
     * @return ResponseAbstract
     */
    public function send(): ResponseAbstract;
}
