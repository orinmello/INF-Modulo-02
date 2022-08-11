<?php
require_once "Pessoa.php";
require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";
require_once "PessoaEstrangeira.php";

$f = new PessoaFisica($_POST["nome"],$_POST["sobrenome"],$_POST["telefone"],$_POST["cpf"],$_POST["email"], $_POST["nascimento"]);

$j = new PessoaJuridica($_POST["nome"], $_POST["sobrenome"], $_POST["telefone"], $_POST["cnpj"], $_POST["faturamento"]);

$e = new PessoaEstrangeira($_POST["nome"],$_POST["sobrenome"],$_POST["telefone"],$_POST["paisOrigem"],$_POST["numPassaporte"]);

//métodos


$type = $_POST["type"];

if($type == "PessoaFisica")
{
    echo $f->mostrarInformacao();
}elseif($type == "PessoaJuridica")
{
    echo $j->consultarFaturamento();
}elseif($type == "PessoaEstrangeira")
{
    echo $e->mostrarInformacao();
}