<?php
require_once("Sql.php");

define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','33541792');
define('DB','db_cbk');

$db = new Sql();

$db->query("insert into t_produto (nome,qtd) values('pen',88)");

echo "conectado com sucesso<br/>";

// $name = $_GET["p_name"];
// $qtd = $_GET["p_qtd"];

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
header('Location : ./../cadastro-novo-produto.php');