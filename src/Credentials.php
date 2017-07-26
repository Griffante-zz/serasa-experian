<?php

namespace SerasaExperian;

trait Credentials {
    
    private $username;
    
    private $password;
    
    public function setCredentials($username, $password) {
        $this->username = $username;
        $this->password = $password;
        
        $this->setHeader();
    }
    
    public function getCredentials() {
        return [
            'username' => $this->username,
            'password' => $this->password,
        ];
    }
    
    protected function setHeader() {
        //
    }
    
}
