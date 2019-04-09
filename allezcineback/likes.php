<?php

    require('./Settings/dbconnect.php');
    require('./Settings/header.php');

    $sql = "UPDATE `COMMENTAIRES` SET LIKES = LIKES + 1 WHERE `COMMENTAIRES`.`IDCOM` = :IDCOM";

    $stmt = $pdo->prepare($sql);

    if(isset($_GET['idCom'])){
        $idCom = $_GET['idCom'];

        $stmt->execute([
            'IDCOM'=> $idCom
        ]);

        http_response_code(202);
        print json_encode(array("message"=>"Like was properly added"));

    } else {
        echo "A problem happened while sending like! ";
        http_response_code(404);

    }
?>