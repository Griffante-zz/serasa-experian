<?php

namespace SerasaExperian\Models;

abstract class Pessoa extends Model {
    
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
