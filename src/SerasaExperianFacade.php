<?php

namespace SerasaExperian;

use SerasaExperian\Parameters\ParametersInPF;

final class SerasaExperianFacade {
    
    
    public function consultarPessoaFisica(ParametersInPF $parameters) {
        $proxy = SerasaExperianProxy::getInstance();
        
        $arguments = $parameters->toArray();
        
        $data = $proxy->getClient()->ConsultarPF($arguments);
        
        return $data->result;
    }
    
}
