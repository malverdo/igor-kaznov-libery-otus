<?php


namespace Cases\IgorKaznovLibraryOtus;

class StrLen
{
    public function getLen($string)
    {
        return mb_strlen($string);
    }
}