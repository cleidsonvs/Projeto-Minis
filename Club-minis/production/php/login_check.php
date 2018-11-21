<?php
    include("./db_connect.php");

/*    if(empty($_POST['username']) || empty($_POST['password'])){
        header('Location: login.php');
        exit();
    }*/

$user = mysqli_real_escape_string($conn ,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
/*
$query = "select usuario from t_usuario where usuario='{$user}' and senha='{$password}'";

$result = mysqli_query($conn,$query);

$rows = mysqli_num_rows($result);

if($rows == 1){
    $Sesion['usuario'] = $user;
    header('Location: index.php');
    exit();
} else{
    header('Location: login.php');
    exit();
}
*/

if($user=='admin' and $password=='123456'){
//    echo "$user, $password";
    $Sesion['usuario'] = $user;
    header('Location: ./../index.php');
    exit();
} else{
//    echo "$user, $password";
    header('Location: ./../login.php');
    exit();
}
