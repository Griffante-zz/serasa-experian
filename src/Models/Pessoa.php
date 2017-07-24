<?php

namespace SerasaExperian\Models;

abstract class Pessoa {
    
    /**
     *
     * @var string
     */
    public $id;
    
    /**
     *
     * @var Enderecos[]
     */
    public $enderecos;
    
    /**
     *
     * @var Telefones[]
     */
    public $telefones;
    
}
