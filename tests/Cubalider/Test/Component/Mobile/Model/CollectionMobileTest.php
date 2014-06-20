<?php

namespace Cubalider\Test\Component\Mobile\Model;

use Cubalider\Component\Mobile\Model\CollectionMobile;

/**
 * @author Miguel Torres <miguel.torres.ss24@gmail.com>
 */
class CollectionMobileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::setId
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::getId
     */
    public function testId()
    {
        $collection = new CollectionMobile();
        $this->assertNull($collection->getId());

        $collection->setId('1');
        $this->assertEquals('1', $collection->getId());
    }

    /**
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::setMobile
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::getMobile
     */
    public function testMobile()
    {
        $collectionMobile = new CollectionMobile();
        $this->assertNull($collectionMobile->getMobile());

        /** @var \Cubalider\Component\Mobile\Model\Mobile $mobile */
        $mobile = $this->getMock('Cubalider\Component\Mobile\Model\Mobile');
        $collectionMobile->setMobile($mobile);
        $this->assertEquals($mobile, $collectionMobile->getMobile());
    }

    /**
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::setCollection
     * @covers \Cubalider\Component\Mobile\Model\CollectionMobile::getCollection
     */
    public function testCollection()
    {
        $collectionMobile = new CollectionMobile();
        $this->assertNull($collectionMobile->getCollection());

        /** @var \Cubalider\Component\Mobile\Model\Collection $collection */
        $collection = $this->getMock('Cubalider\Component\Mobile\Model\Collection');
        $collectionMobile->setCollection($collection);
        $this->assertEquals($collection, $collectionMobile->getCollection());
    }
}