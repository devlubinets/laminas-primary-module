<?php

namespace PrimaryModule\Request;

use PrimaryModule\Response\PrimaryResponse;
use PrimaryModule\Response\ResponseAbstract;

/**
 * Class PrimaryRequest
 *
 * @package PrimaryModule\Request\PrimaryRequest
 */
class PrimaryRequest extends RequestAbstract
{
    /**
     * @inheritdoc
     */
    public function send(): ResponseAbstract
    {
        return new PrimaryResponse();
    }
}
