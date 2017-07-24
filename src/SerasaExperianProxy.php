<?php

namespace SerasaExperian;

final class SerasaExperianProxy {
    
    /**
     *
     * @var SerasaExperianProxy
     */
    private static $instance;
    
    /**
     *
     * @var boolean
     */
    private static $homologacao = false;
    
    /**
     *
     * @var \SoapClient
     */
    private $client;


    private function __construct() {
        $wsdl = self::$homologacao ?
                'https://sitenethomologa.serasa.com.br/experian-data-licensing-ws/dataLicensingService?wsdl' :
                'https://sitenethomologa.serasa.com.br/experian-data-licensing-ws/dataLicensingService?wsdl';

        $username = '73916947';
        $password = '40302010';

        $options = [];
        if (self::$homologacao) {
            $options['trace'] = 1;
        }
        
        $this->client = new \SoapClient($wsdl, $options);
        $this->client->__setSoapHeaders([new WsseAuthHeader($username, $password)]);
    }
    
    /**
     * 
     * @return SerasaExperianProxy
     */
    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    public static function setHomologacao(bool $homologacao) {
        self::$homologacao = $homologacao;
    }
    
    /**
     * 
     * @return \SoapClient
     */
    public function getClient() {
        return $this->client;
    }
    
}