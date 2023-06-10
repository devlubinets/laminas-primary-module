<?php

namespace OrmModule\Process;

/**
 * Class ProcessInterface
 *
 * @package OrmModule\Process\ProcessInterface
 */
interface ProcessInterface
{
    /** @return object */
    public function execute(): object;
}
