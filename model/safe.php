<?php

class Safe{
    protected $host         = "localhost";
    protected $user         = "root";
    protected $password     = "ZDhm@8686";
    protected $database     = "StoreDB";

    
    //ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY '';
    
    public function __construct(){        
        //$_GET       = filter_var(INPUT_GET, FILTER_SANITIZE_STRING);
        //$_POST      = filter_var(INPUT_POST, FILTER_SANITIZE_STRING);
        //$_REQUEST   = (array)$_POST + (array)$_GET + (array)$_REQUEST;
    }

    public function Value($val){
        return trim($val);
    }
    public function noHTMLnoQuotes($string){
        return htmlentities($this->Value($string),ENT_NOQUOTES);
    }
    public function noHTMLquotes($string){
        return htmlentities($this->Value($string),ENT_QUOTES);
    }
    public function firstUpperCase($string){
        return ucfirst(strtolower($this->Value($var)));
    }
    public function allLowerCase($string){
        return strtolower($this->Value($string));
    }
    public function urlEncode($string){
        return urlencode($this->Value($string));
    }
    public function urlDecode($string){
        return urldecode($this->Value($string));
    }
    public function slash($string){
        return addslashes($string);
    }
    public function noSlash($string){
        return stripslashes($string);
    }
    public function sql($connection,$val){
        if(is_numeric($val)){
            return $val;
        }
        return "'".mysqli_real_escape_string($connection,htmlspecialchars($this->Value($val)))."'";
    }
    public function sqlWithArray($connection,$array){
        $return = array();
        foreach($array as $field=>$val){
            $return[$field] = "'".mysqli_real_escape_string($connection,htmlspecialchars($this->Value($val)))."'";
        }
        return $return;
    }
}
?>