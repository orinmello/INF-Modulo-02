<?php
class PessoaEstrangeira extends Pessoa
{
protected $paisOrigem, $numPassaporte;
//construtor
public function __construct($novoNome,$novoSobrenome,$novoTelefone,$novoPaisOrigem,$novoNumPassaporte)
{
    $this->nome=$novoNome;
    $this->sobrenome=$novoSobrenome;
    $this->telefone=$novoTelefone;
    $this->paisOrigem=$novoPaisOrigem;
    $this->numPassaporte=$novoNumPassaporte;
} 
//get
public function getPaisOrigem()
{
    return $this->paisOrigem;
}
public function getNumPassaporte()
{
    return $this->numPassaporte;
}
//set
public function setPaisOrigem($novoPaisOrigem)
{
    $this->paisOrigem=$novoPaisOrigem;
}
public function setNumPassaporte($novoNumPassaporte)
{
    $this->numPassaporte=$novoNumPassaporte;
}

public function mostrarInformacao()
{
    echo "Nome: ".$this->nome. " " .$this->sobrenome. "<br>"; 
    echo "Telefone: " .$this->telefone. "<br>";
    echo "Pais de Origem: " .$this->paisOrigem. "<br>"; 
    echo "Numero do Passaporte: " .$this->numPassaporte;
}
}