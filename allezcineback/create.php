<?php
    require('./Settings/dbconnect.php');
    require('./Settings/header.php');
    header("Access-Control-Allow-Methods: OPTION, POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Origin: *");
    $sql = "INSERT INTO `COMMENTAIRES` (`IDMOVIES`, `TITLE`, `TEXTE`)
        VALUES(
            :IDMOVIES,
            :TITLE,
            :TEXTE
        )";
    $stmt = $pdo->prepare($sql);
    ini_set('allow_url_fopen', true);
    $str_json = file_get_contents('php://input');
    $data = json_decode($str_json);
    if(($data->title && $data->texte && $data->idMovies)){
        $idMovies = htmlspecialchars($data->idMovies);
        $title = htmlspecialchars($data->title);
        $texte = htmlspecialchars($data->texte);
        if ($stmt->execute([
            'IDMOVIES'=> $idMovies,
            'TITLE'=>$title,
            'TEXTE'=>$texte
        ])){
            http_response_code(201);
            print json_encode(array("message"=>"Commentaire créé"));
        }else {
            echo "Error";
            http_response_code(400);
        }
    }else{
        echo "Error posting comment :(";
        http_response_code(404);
    }
