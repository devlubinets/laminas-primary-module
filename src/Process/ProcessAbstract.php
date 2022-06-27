<?php

namespace IarPortalModule\Process;

use IarPortalModule\Request\RequestAbstract;

/**
 * Class ProcessAbstract
 * @package IarPortalModule\Process\ProcessAbstract
 */
abstract class ProcessAbstract implements ProcessInterface
{
    /** @var RequestAbstract $request */
    protected RequestAbstract $request;

    /** */
    public function __construct(RequestAbstract $request)
    {
        $this->request = $request;
    }

    /** @inheritdoc */
    abstract public function execute();

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
