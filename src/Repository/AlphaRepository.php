<?php

namespace AlphaModule\Repository;

use AlphaModule\Model\AlphaModel;

/**  */
class AlphaRepository
{
    /**  */
    public function __construct()
    {
        // todo: add DI
    }

    /**
     * @param int $id
     * @return AlphaModel
     */
    public function findAlphaByID(int $id): AlphaModel
    {
        // this could use a hydrator or manual object create. A Model should always be returned

        $alphaModel = new AlphaModel();
        $alphaModel->exchangeArray(
            [
                "alphaID" => $id,
            ]
        );

        return $alphaModel;
    }
}
