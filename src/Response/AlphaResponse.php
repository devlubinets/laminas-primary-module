<?php

namespace AlphaModule\Response;

/**
 * Class AlphaResponse
 *
 * @package AlphaModule\Response\AlphaResponse
 */
class AlphaResponse extends ResponseAbstract
{
    /**
     * @inheritdoc 
     */
    public function populate(): bool
    {
        return true;
    }
}
