<?php

namespace AlphaModule\Process;

/**
 * Class ProcessInterface
 *
 * @package AlphaModule\Process\ProcessInterface
 */
interface ProcessInterface
{
    /** @return object */
    public function execute(): object;
}
