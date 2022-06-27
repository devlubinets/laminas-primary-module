<?php

namespace IarPortalModule\Response;

/**
 * Class ResponseAbstract
 * @package IarPortalModule\Response\ResponseAbstract
 */
abstract class ResponseAbstract implements ResponseInterface
{
    /** @inheritdoc */
    abstract public function populate(): bool;
}
