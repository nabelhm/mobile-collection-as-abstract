<?php

namespace Cubalider\Component\Mobile\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Collection
{
    /**
     * @var int
     */
    private $id;

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
}