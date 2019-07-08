<?php

class Validation{

    protected  function isEmpty($string){
        if(empty($string)){
            return  true;
        }
        return false;
    }
}
