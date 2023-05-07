<?php

namespace PrimaryModuleTest\Model;

use PrimaryModule\Model\PrimaryModel;
use PrimaryModuleTest\AbstractApplicationTestCase;

/**  */
class PrimaryModelTest extends AbstractApplicationTestCase
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
        $primaryModel = new PrimaryModel();
        $childPrimaryModel = new PrimaryModel();
        $childPrimaryModel->setPrimaryID($value);
        $getter = "get" . $propertyName;
        $setter = "set" . $propertyName;
        $primaryModel->$setter($value);
        $values = $primaryModel->exchangeArray();
        $values["childPrimaryModel"] = $childPrimaryModel;
        $primaryModel->exchangeArray($values);
        // NB: reset values to multidimensional array
        $values = $primaryModel->exchangeArray();

        $this->assertTrue(method_exists($primaryModel, $getter));
        $this->assertTrue(method_exists($primaryModel, $setter));
        $this->assertEquals($value, $primaryModel->$getter());
        $this->assertIsArray($values);
        $this->assertEquals($values, $primaryModel->getArrayCopy());
    }

    /**
     * @return array[]
     */
    public function allIntProperties(): array
    {
        return [
            ["primaryID", 123,],
        ];
    }
}
