<?php

namespace PrimaryModule\Response;

/**
 * Class ResponseAbstract
 *
 * @package PrimaryModule\Response\ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /**
     * @inheritdoc
     */
    abstract public function populate(): bool;
}
