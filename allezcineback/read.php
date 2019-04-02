<?php

    include('./Settings/dbconnect.php');
    require('./Settings/header.php');

    $sql = 'SELECT * FROM COMMENTAIRES WHERE (:ID-MOVIES = ID-MOVIES)';
    $stmt = $pdo->prepare($sql);

    if($_GET['idMovie']){
        $idMovies = $_GET['idMovie'];

        $stmt->execute([
            'ID-MOVIES'=> $idMovies,
        ]);
    
        $commentaires = $stmt->fetchAll();
    
        try{
            print json_encode($commentaires);
        }catch(Exception $e){
            var_dump($e);
            echo "This movie doesn't exists!";
        };
    } else{
        echo "error!";
    }

    

    
?>