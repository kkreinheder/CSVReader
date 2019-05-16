<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 5/1/2019
 * Time: 10:56 PM
 */

//namespace kkreinheder;


class table
{
    public static function tableStart()
    {
        return '<table class="table">';
    }
    public static function tableEnd()
    {
        return '</table>';
    }
    
    public static function trStart()
    {
        return '<tr>';
    }
    public static function trEnd()
    {
        return '</tr>';
    }
    public static function th($data)
    {
        return '<th>' . $data . '</th>';
    }
    public static function td($data)
    {
        return '<td>' . $data . '</td>';
    }
    public static function startTable()
    {
        return (table::tableStart())  . (table::trStart());
    }
    public static function endTable()
    {
        return (table::trEnd())  . (table::tableEnd());
    }
}