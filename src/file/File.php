<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 5/1/2019
 * Time: 10:56 PM
 */
//namespace kkreinheder\file;
include "Autoload.php";
class File
{
    public static function readCSVtoArray(String $filename): array
    {
        $records = arrays::makeArray();
        $count = 0;
        $fieldNames = '';
        $handle = csv::csvOpen($filename);
        while ($row = csv::getRows($handle)) {
            if ($count == 0) {
                $fieldNames = $row;
            } else {
                $records[] =(object)RecordFactory::create($fieldNames, $row);
            }
            $count++;
        }
        csv::csvClose($handle);
        return $records;
    }
    public static function printArrayAsTable(Array $records): string
    {
        $row = (table::startTable());
        $fieldnames = arrays::printArrayKeys($records);
        $values = arrays::printArrayValues($records);
        foreach ($fieldnames as $fieldName)
        {
            $row .= table::th($fieldName);
        }
        foreach ($values as $value)
        {
            $row .= table::trStart();
            foreach ($fieldnames as $fieldName) {
                $row .= table::td($value[$fieldName]);
            }
            $row .= table::trEnd();
        }
        $row .= (table::endTable());
        return $row;
    }
}