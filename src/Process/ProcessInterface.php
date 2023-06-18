<?php

namespace AuthModule\Process;

/**
 * Class ProcessInterface
 *
 * @package AuthModule\Process\ProcessInterface
 */
interface ProcessInterface
{
    /** @return object */
    public function execute(): object;
}
