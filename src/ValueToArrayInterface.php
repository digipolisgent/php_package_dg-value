<?php

namespace DigipolisGent\Value;

/**
 * Interface adding the possibility to get an array representation of the value.
 *
 * @package DigipolisGent\Value
 */
interface ValueToArrayInterface
{
    /**
     * Returns a value object based on values extracted from the given array.
     *
     * @return array
     *   The data array representing the value object.
     */
    public static function toArray();
}