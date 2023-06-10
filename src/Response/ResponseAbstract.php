<?php

namespace OrmModule\Response;

/**
 * Class ResponseAbstract
 *
 * @package OrmModule\Response\ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /**
     * @inheritdoc
     */
    abstract public function populate(): bool;
}
