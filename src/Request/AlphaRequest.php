<?php

namespace AlphaModule\Request;

use AlphaModule\Response\AlphaResponse;
use AlphaModule\Response\ResponseAbstract;

/**
 * Class AlphaRequest
 *
 * @package AlphaModule\Request\AlphaRequest
 */
class AlphaRequest extends RequestAbstract
{
    /**
     * @inheritdoc
     */
    public function send(): ResponseAbstract
    {
        return new AlphaResponse();
    }
}
