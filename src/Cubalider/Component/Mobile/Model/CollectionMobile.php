<?php

namespace Cubalider\Component\Mobile\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class CollectionMobile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Mobile
     */
    private $mobile;

    /**
     * @var Collection
     */
    private $collection;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Mobile $mobile
     */
    public function setMobile(Mobile $mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return Mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param Collection $collection
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collection;
    }
}