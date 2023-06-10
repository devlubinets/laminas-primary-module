<?php

namespace OrmModule\Request;

use OrmModule\Response\ResponseAbstract;

/**
 * Class RequestAbstract
 *
 * @package OrmModule\Request\RequestAbstract
 */
abstract class RequestAbstract implements RequestInterface
{
    /**
     * @inheritdoc
     */
    abstract public function send(): ResponseAbstract;
}
