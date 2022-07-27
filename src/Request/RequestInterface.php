<?php

namespace AlphaModule\Request;

use AlphaModule\Response\ResponseAbstract;

/**
 * Class RequestInterface
 * @package AlphaModule\Request\RequestInterface
 */
interface RequestInterface
{
    /**
     * @return ResponseAbstract
     */
    public function send(): ResponseAbstract;
}
