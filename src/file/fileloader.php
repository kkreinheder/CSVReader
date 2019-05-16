<?php

include "Autoload.php";

class fileloader
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();

        while(! feof($file))
        {
            $records[] = fgetcsv($file);
        }

        fclose($file);
        return $records;
    }

    public static function printArrayAsTable(Array $records): string
    {
        $row = (table::table());
        $fieldnames = arrays::printArrayKeys($records);
        $values = arrays::printArrayValues($records);
        foreach ($fieldnames as $fieldname)
        {
            $row .= table::th($fieldname);
        }
        $row .= (table::MidOfHtml());
        foreach ($values as $value)
        {
            $row .= table::trStart();
            foreach ($fieldnames as $fieldname) {
                $row .= table::td($value[$fieldname]);
            }
            $row .= table::trEnd();
        }
        $row .= (table::endTable());
        return $row;
    }
}