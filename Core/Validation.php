<?php

namespace Core;

class Validation
{
    public $patterns = array(
        'uri'           => '[A-Za-z0-9-\/_?&=]+',
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'alpha'         => '[\p{L}]+',
        'words'         => '[\p{L}\s]+',
        'alphanum'      => '[\p{L}0-9]+',
        'int'           => '[0-9]+',
        'float'         => '[0-9\.,]+',
        'tel'           => '[0-9+\s()+-]+',
        'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'file'          => '[a-zA-Z\s0-9-_!%&()=\[\]#@,.;+]+\.[a-zA-Z]{2,4}',
        'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
        'address'       => '[\a-zA-Z0-9\s.,()°-]+',
        'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+[.]+[a-z-A-Z]+'
    );


    public array $errors = array();
    private  string $name;
    private  string $value;


    public function name($name){
        $this->name = $name;
        return $this;
    }

    public function value($value){

        $this->value = strip_tags(htmlspecialchars($value));
        return $this;

    }

    public function file($value){

        $this->file = $value;
        return $this;

    }

    public function pattern($name){

        if($name == 'array'){

            if(!is_array($this->value)){
                $this->errors[] = 'Formato campo '.$this->name.' non valido.';
            }

        }else{

            $regex = '/^('.$this->patterns[$name].')$/u';
            if($this->value != '' && !preg_match($regex, $this->value)){
                $this->errors[] = 'Formato campo '.$this->name.' non valido.';
            }

        }
        return $this;

    }

    public function customPattern($pattern){

        $regex = '/^('.$pattern.')$/u';
        if($this->value != '' && !preg_match($regex, $this->value)){
            $this->errors[] = 'Formato campo '.$this->name.' non valido.';
        }
        return $this;

    }

    public function required(){

        if((isset($this->file) && $this->file['error'] == 4) || ($this->value == '' || $this->value == null)){
            $this->errors[] = 'Campo '.$this->name.' obbligatorio.';
        }
        return $this;

    }

    public function min($length){

        if(is_string($this->value)){

            if(strlen($this->value) < $length){
                $this->errors[] = 'Valore campo '.$this->name.' inferiore al valore minimo';
            }

        }else{

            if($this->value < $length){
                $this->errors[] = 'Valore campo '.$this->name.' inferiore al valore minimo';
            }

        }
        return $this;

    }

    public function max($length){

        if(is_string($this->value)){

            if(strlen($this->value) > $length){
                $this->errors[] = 'Valore campo '.$this->name.' superiore al valore massimo';
            }

        }else{

            if($this->value > $length){
                $this->errors[] = 'Valore campo '.$this->name.' superiore al valore massimo';
            }

        }
        return $this;

    }

    public function equal($value){

        if($this->value != $value){
            $this->errors[] = 'Valore campo '.$this->name.' non corrispondente.';
        }
        return $this;

    }

    public function maxSize($size){

        if($this->file['error'] != 4 && $this->file['size'] > $size){
            $this->errors[] = 'Il file '.$this->name.' supera la dimensione massima di '.number_format($size / 1048576, 2).' MB.';
        }
        return $this;

    }


    public function ext($extension){

        if($this->file['error'] != 4 && pathinfo($this->file['name'], PATHINFO_EXTENSION) != $extension && strtoupper(pathinfo($this->file['name'], PATHINFO_EXTENSION)) != $extension){
            $this->errors[] = 'Il file '.$this->name.' non è un '.$extension.'.';
        }
        return $this;

    }

    public function purify($string){
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    public function isSuccess(){
        if(empty($this->errors)) return true;
    }

    public function getErrors(){
        if(!$this->isSuccess()) return $this->errors;
    }

    public function displayErrors(){

        $html = '';
        foreach($this->getErrors() as $error){
            $html .= $error.'/n';
        }
        return $html;

    }

    public function result(){
            return $this->value;
    }

    public static function is_int($value){
        if(filter_var($value, FILTER_VALIDATE_INT)) return true;
    }

    public static function is_float($value){
        if(filter_var($value, FILTER_VALIDATE_FLOAT)) return true;
    }

    public static function is_alpha($value){
        if(filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z]+$/")))) return true;
    }

    public static function is_alphanum($value){
        if(filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[a-zA-Z0-9]+$/")))) return true;
    }

    public static function is_url($value){
        if(filter_var($value, FILTER_VALIDATE_URL)) return true;
    }

    public static function is_uri($value){
        if(filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => "/^[A-Za-z0-9-\/_]+$/")))) return true;
    }

    public static function is_bool($value){
        if(is_bool(filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))) return true;
    }

    public static function is_email($value){
        if(filter_var($value, FILTER_VALIDATE_EMAIL)) return true;
    }

}