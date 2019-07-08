<?php


class LevenShtein{


   /**
    *  levenshtein digits function
    * @param [string] $str1
    * @param [string] $str2
    * @return int
    */
    public static function levenshtein_dis($str1, $str2){
        return levenshtein($str1, $str2);
    }


}