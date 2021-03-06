<?php

namespace NV\RequestLimitBundle\Storage\Provider;

/**
 * Describes methods Provider class should contain
 */
interface ProviderInterface
{
    /**
     * Fetch item from storage by key
     *
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     * Set item to storage with defined key and value($expiresAt)
     *
     * @param $key
     * @param $expiresAt
     * @return mixed
     */
    public function set($key, $expiresAt);

    /**
     * Remove item from storage by given key
     *
     * @param $key
     * @return mixed
     */
    public function remove($key);

    /**
     * @return array
     */
    public function fetchAllItems();

    /**
     * @return mixed
     */
    public function getItemsCount();
}
