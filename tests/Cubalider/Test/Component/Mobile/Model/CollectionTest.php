<?php

namespace Cubalider\Test\Component\Mobile\Model;

use Cubalider\Component\Mobile\Model\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @covers \Cubalider\Component\Mobile\Model\Collection::setId
     * @covers \Cubalider\Component\Mobile\Model\Collection::getId
     */
    public function testId()
    {
        $collection = new Collection();
        $this->assertNull($collection->getId());

        $collection->setId('1');
        $this->assertEquals('1', $collection->getId());
    }
} 