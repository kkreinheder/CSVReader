<?php
//namespace kkreinheder;

class arrays
{
    public static function addArray(array $key, array $value)
    {
        return array_combine($key, $value);
    }

    public static function printArrayKeys(Array $records)
    {
        return array_keys(arrays::getArrayObject($records[0]));
    }

    public static function printArrayValues(Array $records)
    {
        $values = arrays::makeArray();
        for($i=0; $i <= arrays::getSize($records); $i++ )
        {
            $values[] = arrays::getArrayObject($records[$i]);
        }
        return $values;
    }

    public static function getArrayObject($records)
    {
        return (get_object_vars($records));
    }

    public static function getSize(Array $records)
    {
        return (sizeof($records)-1);
    }

    public static function makeArray()
    {
        return  Array();
    }
}