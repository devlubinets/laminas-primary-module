<?php

namespace PrimaryModule\Process;

/**
 * Class ProcessInterface
 *
 * @package PrimaryModule\Process\ProcessInterface
 */
interface ProcessInterface
{
    /** @return object */
    public function execute(): object;
}
