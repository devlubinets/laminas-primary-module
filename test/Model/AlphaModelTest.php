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
        $getter = "get" . $propertyName;
        $setter = "set" . $propertyName;

        $this->assertTrue(method_exists($alphaModel, $getter));
        $this->assertTrue(method_exists($alphaModel, $setter));

        $alphaModel->$setter($value);

        $this->assertEquals($value, $alphaModel->$getter());

        $values = $alphaModel->exchangeArray();

        $this->assertIsArray($values);

        $alphaModel->exchangeArray($values);

        $this->assertEquals($values, $alphaModel->getArrayCopy());
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
