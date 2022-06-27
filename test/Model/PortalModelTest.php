<?php

namespace IarPortalModuleTest\Model;

use IarPortalModule\Model\PortalModel;
use IarPortalModuleTest\AbstractApplicationTestCase;

/**  */
class PortalModelTest extends AbstractApplicationTestCase
{
    /**
     * @dataProvider allIntProperties()
     */
    public function testIntGettersSetters(string $propertyName, int $value)
    {
        $portalModel = new PortalModel();

        if (
            method_exists($portalModel, "set" . $propertyName)
        ) {
            $getter = "get" . $propertyName;
            $setter = "set" . $propertyName;

            $portalModel->$setter($value);

            $this->assertEquals($value, $portalModel->$getter());

            $values = $portalModel->exchangeArray();

            $this->assertIsArray($values);

            $portalModel = new PortalModel();
            $portalModel->exchangeArray($values);

            $this->assertEquals($values, $portalModel->getArrayCopy());
        }
    }

    /**
     * @return array[]
     */
    public function allIntProperties(): array
    {
        return [
            ["portalID", 123,],
        ];
    }
}
