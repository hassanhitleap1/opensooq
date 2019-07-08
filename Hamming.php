<?php

class Hamming extends Validation{
    private $str1;
    private $str2;
    
    /**
     * construct Hamming class
     * @param [string] $str1
     * @param [string] $str2
     */
    function __construct($str1,$str2) {
        $this->str1=$str1;
        $this->str2=$str2;
    }

    /**
     * calculat hamming digits 
     * @return int
     */
    public function hamming_dis() 
    { 
        $i = 0; $count = 0; 
       
        if($this->isEmpty($this->str1)){
            return $count;
        }

        if($this->isEmpty($this->str2)){
            return $count;
        }

       
        while (isset($this->str1[$i]) != '') 
        { 
            if ($this->str1[$i] != $this->str2[$i]) 
                $count++; 
            $i++; 
        } 
        return $count; 
    } 


}

?>