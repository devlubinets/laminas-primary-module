<?php

namespace AlphaModule\Request;

use AlphaModule\Response\ResponseAbstract;

/**
 * Class RequestAbstract
 *
 * @package AlphaModule\Request\RequestAbstract
 */
abstract class RequestAbstract implements RequestInterface
{
    /**
     * @inheritdoc
     */
    abstract public function send(): ResponseAbstract;
}
