<?php

namespace IarPortalModule\Service;

use IarPortalModule\Process\PortalProcess;
use Laminas\Config\Config;
use Laminas\View\Model\JsonModel;

/**
 * Class PortalService
 * @package IarPortalModule\Service\PortalService
 */
class PortalService
{
    /** @var PortalProcess $portalProcess */
    protected PortalProcess $portalProcess;

    /** @var Config $config */
    protected Config $config;

    /**
     * @param Config $config
     * @param PortalProcess $portalProcess
     */
    public function __construct(Config $config, PortalProcess $portalProcess)
    {
        $this->portalProcess = $portalProcess;
        $this->config = $config;
    }

    /**
     * @param int $id
     * @return JsonModel
     */
    public function getPortal(int $id): JsonModel
    {
        $this->getPortalProcess()->setRecordID($id);
        $data = $this->getPortalProcess()->execute();

        return new JsonModel(
            [
                "id" => $id,
                "data" => $data,
            ]
        );
    }

    /**
     * @return PortalProcess
     */
    public function getPortalProcess(): PortalProcess
    {
        return $this->portalProcess;
    }

    /**
     * @param PortalProcess $portalProcess
     * @return PortalService
     */
    public function setPortalProcess(PortalProcess $portalProcess): PortalService
    {
        $this->portalProcess = $portalProcess;

        return $this;
    }
}
