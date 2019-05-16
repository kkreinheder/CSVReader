<?php
//namespace kkreinheder\models;

class record
{
    public function __construct($fieldNames, $data)
    {
        $records = arrays::addArray($fieldNames, $data);
        foreach ($records as $column => $data) {
            self::createCell($column, $data);
        }
    }
    public function createCell($column, $data) {
        $this->{$column} = $data;
    }
}