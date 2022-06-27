<?php

namespace IarPortalModule\Request;

use IarPortalModule\Response\ResponseAbstract;

/**
 * Class RequestAbstract
 * @package IarPortalModule\Request\RequestAbstract
 */
abstract class RequestAbstract implements RequestInterface
{
    /** @inheritdoc */
    abstract public function send(): ResponseAbstract;
}
