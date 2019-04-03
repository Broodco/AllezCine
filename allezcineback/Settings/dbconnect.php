<?php

    $dsn = 'mysql:dbname=COMMENTAIRES;host=localhost';
    $user = 'shoguna';
    $password = 'Snooze123:)';
        
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

?>