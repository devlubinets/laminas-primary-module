<?php

namespace PrimaryModule\Process;

use PrimaryModule\Request\RequestAbstract;

/**
 * Class ProcessAbstract
 *
 * @package PrimaryModule\Process\ProcessAbstract
 */
abstract class ProcessAbstract implements ProcessInterface
{
    /**
     * @var RequestAbstract $request
     */
    protected RequestAbstract $request;

    /** @inheritdoc */
    abstract public function execute(): object;

    /**
     * @return RequestAbstract
     */
    public function getRequest(): RequestAbstract
    {
        return $this->request;
    }

    /**
     * @param RequestAbstract $request
     * @return ProcessAbstract
     */
    public function setRequest(RequestAbstract $request): ProcessAbstract
    {
        $this->request = $request;

        return $this;
    }
}
