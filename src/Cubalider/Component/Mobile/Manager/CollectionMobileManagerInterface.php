<?php

namespace Cubalider\Component\Mobile\Manager;

use Cubalider\Component\Mobile\Model\Collection;
use Cubalider\Component\Mobile\Model\Mobile;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CollectionMobileManagerInterface
{
    /**
     * Collects mobiles that belong to the given collection.
     *
     * @param Collection $collection
     * @return Mobile[]
     */
    public function collect(Collection $collection);

    /**
     * Adds given mobile to the given collection.
     *
     * @param Mobile $mobile
     * @param Collection $collection
     * @return void
     */
    public function add(Mobile $mobile, Collection $collection);

    /**
     * Removes given mobile from given collection.
     *
     * @param Mobile $mobile
     * @param Collection $collection
     * @return void
     */
    public function remove(Mobile $mobile, Collection $collection);
}