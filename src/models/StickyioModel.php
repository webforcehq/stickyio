<?php

namespace WebforceHQ\Stickyio\Models;

use JsonSerializable;
use Exception;

class StickyioModel implements JsonSerializable
{


    public function jsonSerialize(){
        
        return get_object_vars($this);

    }
    
    public function toArray(){

        return array_filter(get_object_vars($this));

    }

    protected function allObjectsAreValidClass(array $validClasses, array $objects){
        
        foreach($objects as $object){
            $currClazz = get_class($object);
            if( ! in_array($currClazz, $validClasses) ){
                $allowedClasses = join(",",$validClasses);
                throw new Exception("Object of class {$currClazz} not allowed, expecting objects of classes: {$allowedClasses}");
            }
        }

    }

    private function dashesToCamelCase($string, $capitalizeFirstCharacter = true){
        
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        
        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;

    }

    public function setDynamically($key, $value){
        
        $setter = "set".$this->dashesToCamelCase($key);
        $this->$setter($value);
        
    }
}
