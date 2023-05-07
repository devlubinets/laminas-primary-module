<?php

namespace PrimaryModule\Repository;

use PrimaryModule\Model\PrimaryModel;

/**  */
class PrimaryRepository
{
    /**  */
    public function __construct()
    {
        // todo: add DI
    }

    /**
     * @param  int $id
     * @return PrimaryModel
     */
    public function findPrimaryByID(int $id): PrimaryModel
    {
        // this could use a hydrator or manual object create. A Model should always be returned

        $primaryModel = new PrimaryModel();
        $primaryModel->exchangeArray(
            [
                "primaryID" => $id,
            ]
        );

        return $primaryModel;
    }
}
