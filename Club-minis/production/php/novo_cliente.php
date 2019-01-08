<?php
include("Sql.php");

$db = new Sql();
print "Conectado com Sucesso";

$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$adress = $_GET["adress"];

echo "<br>variáveis criadas<br>";

echo "insert into t_cliente(cpf,nome,endereco) values('".$nome."','".$adress."','".$cpf."')";

try{
    $db->query("insert into t_cliente(cpf,nome,endereco) values('".$nome."','".$adress."','".$cpf."')");
} catch(Exception $exception){
    print $exception->getMessage();

}

//header("Location: http://localhost/Projeto-Minis/Club-minis/production/vendas-novo-pedido.php");