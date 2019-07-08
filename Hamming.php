<?php

class Hamming extends Validation{
    private $str1;
    private $str2;
    
    function __construct($str1,$str2) {
        $this->str1=$str1;
        $this->str2=$str2;
    }

    public function hammingDist() 
    { 
        $i = 0; $count = 0; 
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