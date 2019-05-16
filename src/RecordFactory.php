<?php
//namespace kkreinheder\factory;

//use kkreinheder\models\record;

class RecordFactory
{
    public static function create($fieldNames, $data)
    {
        return new record($fieldNames, $data);
    }
}