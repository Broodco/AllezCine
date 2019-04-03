<?php

    require('./Settings/dbconnect.php');
    require('./Settings/header.php');

    $sql = "UPDATE `COMMENTAIRES` SET LIKES = LIKES + 1 WHERE `COMMENTAIRES`.`ID-COM` = :IDCOM";

    $stmt = $pdo->prepare($sql);

    if(isset($_GET['idMovie'])){
        $idCom = $_POST['idMovies'];

        $stmt->execute([
            'IDCOM'=> $idCom
        ]);

        http_response_code(202);
        print json_encode(array("message"=>"Like was properly added"));

    } else {

    }
?>