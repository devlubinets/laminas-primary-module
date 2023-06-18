<?php

namespace AuthModule\Request;

use AuthModule\Response\ResponseAbstract;

/**
 * Class RequestAbstract
 *
 * @package AuthModule\Request\RequestAbstract
 */
abstract class RequestAbstract implements RequestInterface
{
    /**
     * @inheritdoc
     */
    abstract public function send(): ResponseAbstract;
}
