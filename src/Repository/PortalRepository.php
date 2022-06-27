<?php

namespace IarPortalModule\Repository;

use IarPortalModule\Model\PortalModel;

/**  */
class PortalRepository
{
    /**  */
    public function __construct()
    {
        // todo: add DI
    }

    /**
     * @param int $id
     * @return PortalModel
     */
    public function findPortalByID(int $id): PortalModel
    {
        // this could use a hydrator or manual object create. A Model should always be returned

        $portalModel = new PortalModel();
        $portalModel->exchangeArray(
            [
                "id" => $id,
            ]
        );

        return $portalModel;
    }
}
