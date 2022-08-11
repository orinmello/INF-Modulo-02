<?php
class Pessoa
{
protected $nome;
protected $sobrenome;
protected $telefone;

//get
public function getNome()
{
    return $this->nome;
}
public function getSobrenome()
{
    return $this->sobrenome;
}
public function getTelefone()
{
    return $this->telefone;
}
//set
public function setNome($novoNome)
{
    $this->nome = $novoNome;
}
public function setSobrenome($novoSobrenome)
{
    $this->sobrenome = $novoSobrenome;
}
public function setTelefone($novoTelefone)
{
    $this->telefone = $novoTelefone;
}
}
