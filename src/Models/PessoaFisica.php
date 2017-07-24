<?php

namespace SerasaExperian\Models;

final class PessoaFisica extends Pessoa {
    
    /**
     *
     * @var string 
     */
    public $cpf;
    
    /**
     *
     * @var string 
     */
    public $nome;
    
    /**
     *
     * @var DateTime 
     */
    public $dataNascimento;
    
    /**
     *
     * @var int 
     */
    public $idade;
    
    /**
     *
     * @var string
     */
    public $signo;
    
    /**
     *
     * @var string
     */
    public $sexo;
    
    /**
     *
     * @var string
     */
    public $nomeMae;
    
    /**
     *
     * @var SituacaoCadastralPessoaFisica 
     */
    public $situacaoCadastral;
    
    /**
     *
     * @var string
     */
    public $renda;
    
    /**
     *
     * @var string 
     */
    public $triagemRisco;
    
    /**
     *
     * @var AtividadeConsumo 
     */
    public $atividadeConsumo;
    
    /**
     *
     * @var SocioEmpresa[] 
     */
    public $sociosEmpresa;
    
    /**
     *
     * @var string 
     */
    public $profissao;
    
    /**
     *
     * @var string 
     */
    public $estadoCivil;
    
    /**
     *
     * @var string 
     */
    public $escolaridade;
    
    /**
     *
     * @var boolean 
     */
    public $bolsaFamilia;
    
    /**
     *
     * @var string 
     */
    public $mosaic;
    
    /**
     *
     * @var string 
     */
    public $classeSocial;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeCartaoCredito;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeCreditoPessoal;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeArtigosLuxo;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadePacotesTurismo;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeCelularPosPago;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeImobiliario;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeTvAssinatura;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeBandaLarga;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeEcommerce;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeClientePremium;
    
    /**
     *
     * @var boolean 
     */
    public $afinidadeSmartphone;
    
    /**
     *
     * @var Ccf 
     */
    public $ccf;
    
    /**
     *
     * @var CodIbge 
     */
    public $codIbge;
    
    /**
     *
     * @var string 
     */
    public $facesClasseMedia;
    
    /**
     *
     * @var string 
     */
    public $latitude;
    
    /**
     *
     * @var string 
     */
    public $longitude;
    
    /**
     *
     * @var string 
     */
    public $nis;
    
    /**
     *
     * @var string
     */
    public $rg;
    
    /**
     *
     * @var boolean 
     */
    public $servidorPublicoFederal;
    
    /**
     *
     * @var string 
     */
    public $houseHoldID;
    
    /**
     *
     * @var string 
     */
    public $houseHoldRenda;
    
    /**
     *
     * @var string 
     */
    public $houseHoldQtdPessoa;
    
    /**
     *
     * @var RepresentanteLegal[] 
     */
    public $representanteLegal;
    
    /**
     *
     * @var int 
     */
    public $inibir;
    
    /**
     *
     * @var string
     */
    public $mensagem;
    
}
