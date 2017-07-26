<?php

namespace SerasaExperian;

use SerasaExperian\Exceptions\InvalidTypeException;

abstract class DataManager implements IData {
    
    public function toArray() {
        $reflect = new \ReflectionClass($this);
        
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
        $parameters = [];
        foreach ($properties as $property) {
            if($this->{$property->name} !== null) {
                if (is_object($this->{$property->name})) {
                    if (!($this->{$property->name} instanceof IData)) {
                        throw new InvalidTypeException("Objeto não implementa a interface SerasaExperian\\IData");
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
        
        if (is_object($data)) {
            $this->fillObject($data);
        }
        
        if (is_array($data)) {
            $this->fillArray($data);
        }
        
        if (!is_object($data) && !is_array($data)) {
            throw new InvalidTypeException;
        }
        
        return $this;
    }
    
    public function clearNullProperties() {
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

    protected function fillArray(array $data) {
        foreach ($data as $property => $value) {
            $this->{$property} = $value;
        }
    }
    
    protected function fillObject(\stdClass $data) {
        foreach ($data as $property => $value) {
            $this->{$property} = $value;
        }
    }
    
}