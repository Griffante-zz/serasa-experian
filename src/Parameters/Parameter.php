<?php

namespace SerasaExperian\Parameters;

use SerasaExperian\Exceptions\InvalidParameterException;

abstract class Parameter {
    
    public function toArray() {
        $reflect = new \ReflectionClass($this);
        
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
        $parameters = [];
        foreach ($properties as $property) {
            if($this->{$property->name} !== null) {
                if (is_object($this->{$property->name})) {
                    if (!($this->{$property->name} instanceof Parameter)) {
                        throw new InvalidParameterException;
                    }
                    $parameters[$property->name] = $this->{$property->name}->toArray();
                }
                else {
                    $parameters[$property->name] = $this->{$property->name};
                }
            }
        }
        
        return $parameters;
    }
    
    public function fill($data) {
        foreach ($data as $property => $value) {
            $this->{$property} = $value;
        }
        
        return $this;
    }
    
    public function notNull() {
        $model = clone $this;
        $reflect = new \ReflectionClass($model);
        
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
        
        foreach ($properties as $property) {
            if($this->{$property->name} === null) {
                unset($model->{$property->name});
            }
        }
        
        return $model;
    }
    
}
