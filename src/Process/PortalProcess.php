<?php

namespace IarPortalModule\Process;

use IarPortalModule\Repository\PortalRepository;
use IarPortalModule\Request\PortalRequest;

/**
 * Class PortalProcess
 * @package IarPortalModule\PortalProcess
 */
class PortalProcess extends ProcessAbstract
{
    /** @var PortalRepository $portalRepository */
    protected PortalRepository $portalRepository;

    /** @var int $recordID */
    protected int $recordID;

    /**
     * @param PortalRepository $portalRepository
     */
    public function __construct(PortalRepository $portalRepository)
    {
        $this->portalRepository = $portalRepository;

        parent::__construct(new PortalRequest());
    }

    /** @inheritdoc */
    public function execute()
    {
        // todo: do process action, call API, or gather data

        return []; // todo: return a useful Model
    }

    /**
     * @return PortalRepository
     */
    public function getPortalRepository(): PortalRepository
    {
        return $this->portalRepository;
    }

    /**
     * @param PortalRepository $portalRepository
     * @return PortalProcess
     */
    public function setPortalRepository(PortalRepository $portalRepository): PortalProcess
    {
        $this->portalRepository = $portalRepository;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecordID(): int
    {
        return $this->recordID;
    }

    /**
     * @param int $recordID
     * @return PortalProcess
     */
    public function setRecordID(int $recordID): PortalProcess
    {
        $this->recordID = $recordID;

        return $this;
    }
}
