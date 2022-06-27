<?php

namespace IarPortalModule\Request;

use IarPortalModule\Response\ResponseAbstract;

/**
 * Class RequestInterface
 * @package IarPortalModule\Request\RequestInterface
 */
interface RequestInterface
{
    /**
     * @return ResponseAbstract
     */
    public function send(): ResponseAbstract;
}
