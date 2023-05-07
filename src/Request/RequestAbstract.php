<?php

namespace PrimaryModule\Request;

use PrimaryModule\Response\ResponseAbstract;

/**
 * Class RequestAbstract
 *
 * @package PrimaryModule\Request\RequestAbstract
 */
abstract class RequestAbstract implements RequestInterface
{
    /**
     * @inheritdoc
     */
    abstract public function send(): ResponseAbstract;
}
