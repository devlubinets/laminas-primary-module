<?php

namespace PrimaryModuleTest\Response;

use PrimaryModule\Response\PrimaryResponse;
use PrimaryModuleTest\AbstractApplicationTestCase;

/**  */
class PrimaryResponseTest extends AbstractApplicationTestCase
{
    /**  */
    public function testPopulateReturnsTrue()
    {
        $response = new PrimaryResponse();

        $this->assertIsBool($response->populate());
    }
}
