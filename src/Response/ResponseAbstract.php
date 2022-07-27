<?php

namespace AlphaModule\Response;

/**
 * Class ResponseAbstract
 * @package AlphaModule\Response\ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /** @inheritdoc */
    abstract public function populate(): bool;
}
