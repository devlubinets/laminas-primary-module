<?php

namespace AlphaModuleTest\Response;

use AlphaModule\Response\AlphaResponse;
use AlphaModuleTest\AbstractApplicationTestCase;

/**  */
class AlphaResponseTest extends AbstractApplicationTestCase
{
    /**  */
    public function testPopulateReturnsTrue()
    {
        $response = new AlphaResponse();

        $this->assertIsBool($response->populate());
    }
}
