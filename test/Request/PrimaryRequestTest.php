<?php

namespace PrimaryModuleTest\Request;

use PrimaryModule\Request\PrimaryRequest;
use PrimaryModule\Response\PrimaryResponse;
use PrimaryModuleTest\AbstractApplicationTestCase;

/**  */
class PrimaryRequestTest extends AbstractApplicationTestCase
{
    /**  */
    public function testSendReturnsResponse()
    {
        $request = new PrimaryRequest();

        $this->assertInstanceOf(PrimaryResponse::class, $request->send());
    }
}
