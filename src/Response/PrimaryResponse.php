<?php

namespace PrimaryModule\Response;

/**
 * Class PrimaryResponse
 *
 * @package PrimaryModule\Response\PrimaryResponse
 */
class PrimaryResponse extends ResponseAbstract
{
    /**
     * @inheritdoc
     */
    public function populate(): bool
    {
        return true;
    }
}
