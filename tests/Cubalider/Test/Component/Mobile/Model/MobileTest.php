<?php

namespace Cubalider\Test\Component\Mobile\Model;

use Cubalider\Component\Mobile\Model\Mobile;

class MobileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Mobile\Model\Mobile::setNumber
     * @covers \Cubalider\Component\Mobile\Model\Mobile::getNumber
     */
    public function testNumber()
    {
        $mobile = new Mobile();
        $this->assertNull($mobile->getNumber());
        
        $mobile->setNumber('123');
        $this->assertEquals('123', $mobile->getNumber());
    }
} 