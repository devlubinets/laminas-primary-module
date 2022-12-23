<?php

namespace AlphaModule\Response;

/**
 * Class ResponseInterface
 *
 * @package AlphaModule\Response\ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function populate(): bool;
}
