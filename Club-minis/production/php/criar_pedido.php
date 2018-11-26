<?php
    include("Sql.php");

    $db = new Sql();

    echo "conectado com sucesso";

    $nome = $_GET["name_client"];
    $prod = $_GET["product"];
    $qtdp = $_GET["qtd_product"];
    $dp = $_GET["data_pedido"];


    print "\ninsert into t_pedido(cliente,produto,qtd,dada_pedido) values('".$nome."','".$prod."',".$qtdp.",null)\n";

    try{
        $db->query("insert into t_pedido(cliente,produto,qtd,dada_pedido) values('".$nome."','".$prod."',".$qtdp.",null)");
    } catch(Exception $exception){
        print $exception->getMessage();

    }

    header("Location: http://localhost/Projeto-Minis/Club-minis/production/vendas-novo-pedido.php");

?>