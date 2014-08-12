<?php

namespace Cubalider\Component\Mobile\Manager;

use Cubalider\Component\Mobile\Model\Collection;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface CollectionManagerInterface
{
    /**
     * Picks a collection with given criteria.
     *
     * @param mixed $criteria
     *
     * @return Collection
     */
    public function pick($criteria);

    /**
     * Collects collections.
     *
     * @return Collection[]
     */
    public function collect();

    /**
     * Stores given collection.
     *
     * @param Collection $collection
     */
    public function add(Collection $collection);

    /**
     * Deletes given collection.
     *
     * @param Collection $collection
     */
    public function delete(Collection $collection);
}