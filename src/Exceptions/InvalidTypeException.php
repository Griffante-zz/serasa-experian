<?php

namespace SerasaExperian\Exceptions;

final class InvalidTypeException extends \Exception {
    
    public function __construct(string $message = "Variável de tipo inválido", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
    
}