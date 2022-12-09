<?php

namespace AlphaModuleTest\Request;

use AlphaModule\Request\AlphaRequest;
use AlphaModule\Response\AlphaResponse;
use AlphaModuleTest\AbstractApplicationTestCase;

/**  */
class AlphaRequestTest extends AbstractApplicationTestCase
{
    /**  */
    public function testSendReturnsResponse()
    {
        $request = new AlphaRequest();

        $this->assertInstanceOf(AlphaResponse::class, $request->send());
    }
}
