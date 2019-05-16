<?php

//namespace kkreinheder;

class csv
{
    public static function csvOpen(String $file)
    {
        return fopen($file, "r");
    }

    public static function csvClose($file)
    {
        return fclose($file);
    }

    public static function getRows($file)
    {
        return fgetcsv($file, 2000, ",");
    }

}