<?php

namespace AlphaModule\Process;

use AlphaModule\Repository\AlphaRepository;

/**
 * Class AlphaProcess
 *
 * @package AlphaModule\AlphaProcess
 */
class AlphaProcess extends ProcessAbstract
{
    /**
     * @var AlphaRepository $alphaRepository
     */
    protected AlphaRepository $alphaRepository;

    /**
     * @var int $recordID
     */
    protected int $recordID;

    /**
     * @param AlphaRepository $alphaRepository
     */
    public function __construct(AlphaRepository $alphaRepository)
    {
        $this->alphaRepository = $alphaRepository;
    }

    /** @inheritdoc */
    public function execute(): object
    {
        // todo: do process action, call API, or gather data

        return new \stdClass(); // todo: return a useful Model
    }

    /**
     * @return AlphaRepository
     */
    public function getAlphaRepository(): AlphaRepository
    {
        return $this->alphaRepository;
    }

    /**
     * @param AlphaRepository $alphaRepository
     * @return AlphaProcess
     */
    public function setAlphaRepository(AlphaRepository $alphaRepository): AlphaProcess
    {
        $this->alphaRepository = $alphaRepository;

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
     * @return AlphaProcess
     */
    public function setRecordID(int $recordID): AlphaProcess
    {
        $this->recordID = $recordID;

        return $this;
    }
}
