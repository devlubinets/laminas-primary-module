<?php

namespace AuthModule\Response;

/**
 * Class ResponseInterface
 *
 * @package AuthModule\Response\ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function populate(): bool;
}
