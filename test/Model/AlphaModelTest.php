<?php

namespace AlphaModuleTest\Model;

use AlphaModule\Model\AlphaModel;
use AlphaModuleTest\AbstractApplicationTestCase;

/**  */
class AlphaModelTest extends AbstractApplicationTestCase
{
    /**
     * @dataProvider allIntProperties()
     */
    public function testIntGettersSetters(string $propertyName, int $value)
    {
        $alphaModel = new AlphaModel();

        if (
            method_exists($alphaModel, "set" . $propertyName)
        ) {
            $getter = "get" . $propertyName;
            $setter = "set" . $propertyName;

            $alphaModel->$setter($value);

            $this->assertEquals($value, $alphaModel->$getter());

            $values = $alphaModel->exchangeArray();

            $this->assertIsArray($values);

            $alphaModel = new AlphaModel();
            $alphaModel->exchangeArray($values);

            $this->assertEquals($values, $alphaModel->getArrayCopy());
        }
    }

    /**
     * @return array[]
     */
    public function allIntProperties(): array
    {
        return [
            ["alphaID", 123,],
        ];
    }
}
