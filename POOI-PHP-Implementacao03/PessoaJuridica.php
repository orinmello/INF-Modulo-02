<?php
class PessoaJuridica extends Pessoa
{
protected $cnpj, $faturamento;
//construtor
public function __construct ($novoNome,$novoSobrenome,$novoTelefone,$novoCnpj,$novoFaturamento)
{
$this->nome=$novoNome;
$this->sobrenome=$novoSobrenome;
$this->telefone=$novoTelefone;
$this->cnpj=$novoCnpj;
$this->faturamento=$novoFaturamento;
}
//get
public function getCnpj()
{
    return $this->cnpj;
}
public function getFaturamento()
{
    return $this->faturamento;
}
//set
public function setCnpj($novoCnpj)
{
    $this->cnpj=$novoCnpj;
}
public function setFaturamento($novoFaturamento)
{
    $this->faturamento=$novoFaturamento;
}
public function consultarFaturamento()
{
    echo "Faturamento: " .$this->faturamento. "<br>";
if($this->faturamento<0){
    echo "Situação: Reveja seus ativos e passivos para não quebrar";
}else{
    echo "Situação: Não há débitos pendentes";
}
}
}
