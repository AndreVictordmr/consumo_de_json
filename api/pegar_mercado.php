<?php

    header("Content-Type: application/json; charset-UTF-8");
    header("Access-Control-Allow-Origin: *");

    $dados = json_decode(file_get_contents("json/produto.json"),true);

    $nome = $_GET['nome'];
    $salgado = $dados[$nome];
    switch($nome){
        case 'esfira':
            echo json_encode($salgado);
            break;
        case 'coxinha':
            echo json_encode($salgado);
            break;
        case 'cornDog':
            echo json_encode($salgado);
            break;
        default:
            echo json_encode($dados);
    }

