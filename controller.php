<?php
include("pessoa.class.php");

$pessoa = new Pessoa();

$pessoa->setNome($_GET['txtNome']);
echo "Nome: ".$pessoa->getNome()."\n";

$pessoa->setEndereco($_GET['txtEndereco']);
echo "Endereco: ".$pessoa->getEndereco()."\n";

$pessoa->setBairro($_GET['txtBairro']);
echo "Bairro: ".$pessoa->getBairro()."\n";

$pessoa->setCep($_GET['txtCep']);
echo "Cep: ".$pessoa->getCep()."\n";

?>