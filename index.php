<?php

require __DIR__ . '/vendor/autoload.php';

use SerasaExperian\SerasaExperianFacade;
use SerasaExperian\Parameters\ParametersInPF;
use SerasaExperian\Parameters\RetornoPF;

$parameters = new ParametersInPF;

$retorno = new RetornoPF();
$retorno->cpf = true;
$retorno->nome = true;
$retorno->endereco = true;
$retorno->dataNascimento = true;


$parameters->cpf = '00090826892';
$parameters->RetornoPF = $retorno;

$facade = new SerasaExperianFacade();

$result = $facade->consultarPessoaFisica($parameters);

echo "<strong>CPF: </strong>" . $result->cpf . "<br>";
echo "<strong>Nome: </strong>" . $result->nome . "<br>";
echo "<strong>Nascimento: </strong>" . DateTime::createFromFormat('Y-m-d\Th:i:s.000-03:00', $result->dataNascimento)->format('d/m/Y') . "<br>";
echo "<strong>Idade: </strong>" . $result->idade . " anos <br>";
echo "<strong>Signo: </strong>" . $result->signo . "<br>";
echo "<strong>Endereços: </strong><br>";

foreach ($result->enderecos->endereco as $endereco) {
    
    echo "<ul>";
    echo "<li><strong>Logradouro: </strong>" 
        . $endereco->logradouro->Tipo . " " 
        . $endereco->logradouro->Nome . ", " 
        . $endereco->logradouro->Numero .  "</li>";
    
    echo "<li><strong>Bairro: </strong>" . $endereco->bairro .  "</li>";
    echo "<li><strong>Cidade: </strong>" 
        . $endereco->cidade . " - " 
        . $endereco->uf . "<br>";
    
    echo "<li><strong>CEP: </strong>" . $endereco->cep .  "</li>";
    echo "</ul>";
}