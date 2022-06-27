<?php

namespace IarPortalModule\Response;

/**
 * Class ResponseInterface
 * @package IarPortalModule\Response\ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function populate(): bool;
}
