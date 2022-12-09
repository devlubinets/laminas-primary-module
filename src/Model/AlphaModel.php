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

    /** @var AlphaModel|null $childAlphaModel */
    protected ?AlphaModel $childAlphaModel = null;

    /**
     * @return AlphaModel|null
     */
    public function getChildAlphaModel(): ?AlphaModel
    {
        return $this->childAlphaModel;
    }

    /**
     * @param AlphaModel $childAlphaModel
     * @return AlphaModel|null
     */
    public function setChildAlphaModel(AlphaModel $childAlphaModel): ?AlphaModel
    {
        $this->childAlphaModel = $childAlphaModel;

        return $this;
    }

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
