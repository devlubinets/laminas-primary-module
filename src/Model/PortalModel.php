<?php

namespace IarPortalModule\Model;

/**
 * Class PortalModel
 * @package IarPortalModule\PortalModel
 */
class PortalModel extends ModelAbstract
{
    /** @var int $portalID */
    protected int $portalID;

    /**
     * @return int
     */
    public function getPortalID(): int
    {
        return $this->portalID;
    }

    /**
     * @param int $portalID
     * @return PortalModel
     */
    public function setPortalID(int $portalID): PortalModel
    {
        $this->portalID = $portalID;

        return $this;
    }
}
