<?php

namespace AuthModule\Response;

/**
 * Class ResponseAbstract
 *
 * @package AuthModule\Response\ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /**
     * @inheritdoc
     */
    abstract public function populate(): bool;
}
