<?php

class Account{
    private $pdo;
    private $errorArray=array();
    public function __construct(){
         $this->pdo=Database::instance();
    }

    public function register($fn, $ln, $un,$em,$pw,$pw2){
               $this->validateFirstName($fn);
    }

private function validateFirstNam($fn){
    if(strlen($fn) <2 || strlen($fn) > 25){
            array_push($this->errorArray,Constants::$firstNameCharacters)
    }
}
public function getError($error){
    if(in_array($error,$this->errorArray)){
        return "<span class='errorMessage'>$error</span>;
    }
}

}