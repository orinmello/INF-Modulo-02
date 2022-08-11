<?php
class PessoaFisica extends Pessoa 
{
protected $cpf, $email, $nascimento;
//construtor
public function __construct($novoNome,$novoSobrenome,$novoTelefone,$novoCpf,$novoEmail,$novoNascimento)
{
    $this->nome=$novoNome;
    $this->sobrenome=$novoSobrenome;
    $this->telefone=$novoTelefone;
    $this->cpf=$novoCpf;
    $this->email=$novoEmail;
    $this->nascimento=$novoNascimento;
}
//get
public function getCpf()
{
    return $this->cpf;
}
public function getEmail()
{
    return $this->email;
}
public function getNascimento()
{
    return $this->nascimento;
}
//set
public function setCpf($novoCpf)
{
    return $this->cpf=$novoCpf;
}
public function setEmail($novoEmail)
{
    return $this->email=$novoEmail;
}
public function setNascimento($novoNascimento)
{
    return $this->nascimento=$novoNascimento;
}
//metodos
public function mostrarInformacao()
{
    echo "Nome: ". $this->nome." " .$this->sobrenome."<br>"; 
    echo "Telefone: ". $this->telefone."<br>";
    echo "CPF: ". $this->cpf."<br>"; 
    echo "Email: ". $this->email."<br>"; 
    echo "Data de Nascimento: ". $this->nascimento;
}
}