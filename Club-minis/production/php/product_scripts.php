<?php


include("Sql.php");

$db = new Sql();

echo "conectado com sucesso<br/>";

$name = $_GET["p_name"];
$qtd = $_GET["p_qtd"];
print "<br/>";
print "insert into t_produto (nome,qtd) values('".$name."',".$qtd.")";

try{
    $db->query("insert into t_produto (nome,qtd) values('".$name."',".$qtd.")");

} catch(Exception $e){
    print $e->collator_get_error_message();
    
}


// $query = "insert into t_produto(nome,qtd) values ($name,$qtd)";

// if ($query) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . $conn->error;
// }

/*if(mysqli_query($conn, $query)){
    echo "Sucess";
    return true;
} else{
    echo "Fail";
    return false;
}*/
//header('Location: http://localhost/Projeto-Minis/Club-minis/production/cadastro-novo-produto.php');

?>