<?php

namespace SerasaExperian\Exceptions;

final class InvalidParameterException extends \Exception {
    
    public function __construct(string $message = "Objeto não é uma instância da classe Parameters", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
}