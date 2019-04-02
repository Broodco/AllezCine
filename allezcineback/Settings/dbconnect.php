<?php
    // $user = 'allezcine';
    // $password = 'cinema';
    // $host='10.20.1.71';
    // $dbname ='AllezCine';

    $dsn = 'mysql:dbname=AllezCine;host=10.20.1.71';
    $user = 'allezcine';
    $password = 'cinema';

        
        //$dsn = "mysql:host=$host;port=80;dbname=$dbname;";
        try {
            $dbh = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

?>