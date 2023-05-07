<?php

namespace PrimaryModule\Model;

/**
 * Class PrimaryModel
 *
 * @package PrimaryModule\PrimaryModel
 */
class PrimaryModel extends ModelAbstract
{
    /**
     * @var int $primaryID
     */
    protected int $primaryID;

    /**
     * @var PrimaryModel|null $childPrimaryModel
     */
    protected ?PrimaryModel $childPrimaryModel = null;

    /**
     * @return PrimaryModel|null
     */
    public function getChildPrimaryModel(): ?PrimaryModel
    {
        return $this->childPrimaryModel;
    }

    /**
     * @param  PrimaryModel $childPrimaryModel
     * @return PrimaryModel|null
     */
    public function setChildPrimaryModel(PrimaryModel $childPrimaryModel): ?PrimaryModel
    {
        $this->childPrimaryModel = $childPrimaryModel;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryID(): int
    {
        return $this->primaryID;
    }

    /**
     * @param  int $primaryID
     * @return PrimaryModel
     */
    public function setPrimaryID(int $primaryID): PrimaryModel
    {
        $this->primaryID = $primaryID;

        return $this;
    }
}
