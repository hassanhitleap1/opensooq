<?php

class Validation{

    protected  function isEmpty($string){
        if(empty($string)){
            echo '<div class="alert alert-danger" role="alert">
                        value in  its empty
                </div>';
            return  true;
        }
    
        return false;
    }


    public  function isEmptyString($string){
        if(empty($string)){
            echo '<div class="alert alert-danger" role="alert">
                    some value in nbut its empty
                </div>';
            return  true;
        }
        return false;
    }
}
