<?php

function answere($answere,$flag_name){
    
    if($flag_name==strtoupper($answere)){
        
        return true;
    }
    else{
        return false;
    }
}