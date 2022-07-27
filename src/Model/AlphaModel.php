<?php

namespace AlphaModule\Model;

/**
 * Class AlphaModel
 * @package AlphaModule\AlphaModel
 */
class AlphaModel extends ModelAbstract
{
    /** @var int $alphaID */
    protected int $alphaID;

    /**
     * @return int
     */
    public function getAlphaID(): int
    {
        return $this->alphaID;
    }

    /**
     * @param int $alphaID
     * @return AlphaModel
     */
    public function setAlphaID(int $alphaID): AlphaModel
    {
        $this->alphaID = $alphaID;

        return $this;
    }
}
