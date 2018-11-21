<?php
    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASSWORD','33541792');
    define('DB','db_cbk');

    $conn = mysqli_connect(HOST,USER,PASSWORD,DB) or die ('Não foi possível conectar');
?>