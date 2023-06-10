<?php

namespace OrmModule\Response;

/**
 * Class ResponseInterface
 *
 * @package OrmModule\Response\ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function populate(): bool;
}
