<?php


class LevenShtein{
   
    public static function levensht($str1, $str2){
        return levenshtein($str1, $str2);
    }
}