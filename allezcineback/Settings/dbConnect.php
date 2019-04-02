<?php
    $user = 'allezcine';
    $password = 'cinema';
    $host='10.20.1.71';
    $dbname ='AllezCine';

        
        $dsn = "mysql:host=$host;dbname=$dbname;";
        $pdo=new PDO($dsn,$user,$password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>