<?php

    include('./Settings/dbconnect.php');
    require('./Settings/header.php');

    $sql = "SELECT * FROM `COMMENTAIRES` WHERE (`ID-MOVIES`= :IDMOVIES)";
    $stmt = $pdo->prepare($sql);

    if(isset($_GET['idMovie'])){
        $idMovies = $_GET['idMovie'];

        $stmt->execute([
            'IDMOVIES'=> $idMovies,
        ]);
    
        $commentaires = $stmt->fetchAll();
        try{
            print json_encode($commentaires);
        }catch(Exception $e){
            var_dump($e);
            echo "Error connecting to the Data Base!";
        };
    } else{
        echo "This movie doesn't exists!";
    }

    

    
?>