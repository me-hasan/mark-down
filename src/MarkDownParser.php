<?php


namespace techroute\laravelpackagedev;


use Parsedown;

class MarkDownParser
{
    public static function parse($string)
    {

        return Parsedown::instance()->text($string);


    }


}