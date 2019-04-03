<?php

    include('./Settings/dbconnect.php');
    require('./Settings/header.php');

    $sql = 'SELECT * FROM COMMENTAIRES WHERE (ID-MOVIES = :IDMOVIES  )';
    $stmt = $pdo->prepare($sql);

    if(true || isset($_GET['idMovie'])){
        $idMovies = 10; //$_GET['idMovie'];

        $stmt->execute([
            'IDMOVIES'=> $idMovies,
        ]);
    
        $commentaires = $stmt->fetchAll();
        var_dump($commentaires);
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