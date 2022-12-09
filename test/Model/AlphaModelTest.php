<?php

namespace AlphaModuleTest\Model;

use AlphaModule\Model\AlphaModel;
use AlphaModuleTest\AbstractApplicationTestCase;

/**  */
class AlphaModelTest extends AbstractApplicationTestCase
{
    /** */
    public function setUp(): void
    {
        parent::setUp();

        $this->container->setAllowOverride(true);
        // todo: add override mocks here
        $this->container->setAllowOverride(false);
    }

    /**
     * @dataProvider allIntProperties()
     */
    public function testIntGettersSetters(string $propertyName, int $value)
    {
        $alphaModel = new AlphaModel();
        $childAlphaModel = new AlphaModel();
        $childAlphaModel->setAlphaID($value);
        $getter = "get" . $propertyName;
        $setter = "set" . $propertyName;
        $alphaModel->$setter($value);
        $values = $alphaModel->exchangeArray();
        $values["childAlphaModel"] = $childAlphaModel;
        $alphaModel->exchangeArray($values);
        // NB: reset values to multidimensional array
        $values = $alphaModel->exchangeArray();

        $this->assertTrue(method_exists($alphaModel, $getter));
        $this->assertTrue(method_exists($alphaModel, $setter));
        $this->assertEquals($value, $alphaModel->$getter());
        $this->assertIsArray($values);
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
