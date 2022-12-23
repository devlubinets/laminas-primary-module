<?php

namespace AlphaModule\Service;

use AlphaModule\Process\AlphaProcess;
use Laminas\Config\Config;
use Laminas\View\Model\JsonModel;

/**
 * Class AlphaService
 *
 * @package AlphaModule\Service\AlphaService
 */
class AlphaService
{
    /**
     * @var AlphaProcess $alphaProcess 
     */
    protected AlphaProcess $alphaProcess;

    /**
     * @var Config $config 
     */
    protected Config $config;

    /**
     * @param Config       $config
     * @param AlphaProcess $alphaProcess
     */
    public function __construct(Config $config, AlphaProcess $alphaProcess)
    {
        $this->alphaProcess = $alphaProcess;
        $this->config = $config;
    }

    /**
     * @param  int $id
     * @return JsonModel
     */
    public function getAlpha(int $id): JsonModel
    {
        $this->getAlphaProcess()->setRecordID($id);
        $data = $this->getAlphaProcess()->execute();

        return new JsonModel(
            [
                "id" => $id,
                "data" => $data,
            ]
        );
    }

    /**
     * @return AlphaProcess
     */
    public function getAlphaProcess(): AlphaProcess
    {
        return $this->alphaProcess;
    }

    /**
     * @param  AlphaProcess $alphaProcess
     * @return AlphaService
     */
    public function setAlphaProcess(AlphaProcess $alphaProcess): AlphaService
    {
        $this->alphaProcess = $alphaProcess;

        return $this;
    }
}
