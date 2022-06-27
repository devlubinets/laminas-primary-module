<?php

namespace IarPortalModule\Model;

/**
 * Class ModelInterface
 * @package IarPortalModule\Model\ModelInterface
 */
interface ModelInterface
{
    /**
     * @param array $properties
     * @return ModelInterface|array
     */
    public function exchangeArray(array $properties = []);
}
