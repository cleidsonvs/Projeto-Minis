<?php
    require_once("./Sql.php");

    $db = new Sql();

    echo "conectado com sucesso<br/>";

    $nome = $_GET["name_client"];
    $prod = $_GET["product"];
    $qtdp = $_GET["qtd_product"];
    $dp = $_GET["data_pedido"];

    print "$nome <br/> $prod <br/> $qtdp <br/> $dp";

    print "<br/>";
    print "insert into t_pedido (cliente,produto,qtd,data_pedido) values("."null,'".$nome."','".$prod."',".$qtdp.",null)";

    try{
        $db->query("insert into t_pedido (cliente,produto,qtd,data_pedido) values("."null,'".$nome."','".$prod."',".$qtdp.",null)");
    } catch(Exception $e){
        print $e->collator_get_error_message();

    }

    header("Location: http://localhost/Projeto-Minis/Club-minis/production/vendas-novo-pedido.php");

?>