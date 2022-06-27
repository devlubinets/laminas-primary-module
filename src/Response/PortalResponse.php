<?php

namespace IarPortalModule\Response;

/**
 * Class PortalResponse
 * @package IarPortalModule\Response\PortalResponse
 */
class PortalResponse extends ResponseAbstract
{
    /** @inheritdoc */
    public function populate(): bool
    {
        return true;
    }
}
