<?php

namespace PrimaryModule\Response;

/**
 * Class ResponseInterface
 *
 * @package PrimaryModule\Response\ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function populate(): bool;
}
