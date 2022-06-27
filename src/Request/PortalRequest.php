<?php

namespace IarPortalModule\Request;

use IarPortalModule\Response\PortalResponse;
use IarPortalModule\Response\ResponseAbstract;

/**
 * Class PortalRequest
 * @package IarPortalModule\Request\PortalRequest
 */
class PortalRequest extends RequestAbstract
{
    /** @inheritdoc */
    public function send(): ResponseAbstract
    {
        return new PortalResponse();
    }
}
