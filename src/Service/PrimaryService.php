<?php

namespace PrimaryModule\Service;

use PrimaryModule\Process\PrimaryProcess;
use Laminas\Config\Config;
use Laminas\View\Model\JsonModel;

/**
 * Class PrimaryService
 *
 * @package PrimaryModule\Service\PrimaryService
 */
class PrimaryService
{
    /** @var PrimaryProcess $primaryProcess */
    protected PrimaryProcess $primaryProcess;

    /** @var Config $config */
    protected Config $config;

    /**
     * @param Config $config
     * @param PrimaryProcess $primaryProcess
     */
    public function __construct(Config $config, PrimaryProcess $primaryProcess)
    {
        $this->primaryProcess = $primaryProcess;
        $this->config = $config;
    }

    /**
     * @param int $id
     * @return JsonModel
     */
    public function getPrimary(int $id): JsonModel
    {
        $this->getPrimaryProcess()->setRecordID($id);
        $data = $this->getPrimaryProcess()->execute();

        return new JsonModel(
            [
                "id" => $id,
                "data" => $data,
            ]
        );
    }

    /**
     * @return PrimaryProcess
     */
    public function getPrimaryProcess(): PrimaryProcess
    {
        return $this->primaryProcess;
    }

    /**
     * @param PrimaryProcess $primaryProcess
     * @return PrimaryService
     */
    public function setPrimaryProcess(PrimaryProcess $primaryProcess): PrimaryService
    {
        $this->primaryProcess = $primaryProcess;

        return $this;
    }
}
