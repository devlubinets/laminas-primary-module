<?php

namespace PrimaryModule\Process;

use PrimaryModule\Repository\PrimaryRepository;

/**
 * Class PrimaryProcess
 *
 * @package PrimaryModule\PrimaryProcess
 */
class PrimaryProcess extends ProcessAbstract
{
    /** @var PrimaryRepository $primaryRepository */
    protected PrimaryRepository $primaryRepository;

    /** @var int $recordID */
    protected int $recordID;

    /**
     * @param PrimaryRepository $primaryRepository
     */
    public function __construct(PrimaryRepository $primaryRepository)
    {
        $this->primaryRepository = $primaryRepository;
    }

    /** @inheritdoc */
    public function execute(): object
    {
        // todo: do process action, call API, or gather data

        return new \stdClass(); // todo: return a useful Model
    }

    /**
     * @return PrimaryRepository
     */
    public function getPrimaryRepository(): PrimaryRepository
    {
        return $this->primaryRepository;
    }

    /**
     * @param PrimaryRepository $primaryRepository
     * @return PrimaryProcess
     */
    public function setPrimaryRepository(PrimaryRepository $primaryRepository): PrimaryProcess
    {
        $this->primaryRepository = $primaryRepository;

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
     * @return PrimaryProcess
     */
    public function setRecordID(int $recordID): PrimaryProcess
    {
        $this->recordID = $recordID;

        return $this;
    }
}
