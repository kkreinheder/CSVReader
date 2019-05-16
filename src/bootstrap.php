<?php
namespace kkreinheder;

//use kkreinheder\file\fileloader;

class bootstrap
{
    public function __construct(String $filePath)
    {
        $records = fileloader::returnArray($filePath);

        $record = array($records);

        $object = factory\recordFactory::create($record);

        print_r($object);
    }
}