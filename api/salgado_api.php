<?php

    header("Content-Type: application/json; charset-UTF-8");
    header("Access-Control-Allow-Origin: *");

    $arquivo = json_decode(file_get_contents("json/produto.json"),true);
    $metodo=$_SERVER['REQUEST_METHOD'];
    switch($metodo){
        case "GET":
            dadoGet($arquivo);
            break;
        default:
            echo 'Metodo errado';
        break;
    }


    function dadoGet($arquivo){
        $tipo = $_GET['name'];
        $entrada = $_GET['info']??null;
        if(!$entrada){
            $entrada = 'tudo';
        } 
        $salgado=$arquivo['salgado'][$tipo];
     
        switch($entrada){
            case 'ingredientes':
                echo getInfo($salgado,$entrada);
                break;
            case 'origem':
                echo getInfo($salgado,$entrada);
                break;
            case 'nutricao':
                echo getInfo($salgado,$entrada);
                break;
            case 'tudo':
                echo getTudo($salgado);
                break;
            default:
                echo 'Endpoint errado porfavor entre com uma informaçao valida';
                break;
        }
        
    }


    function getInfo($arquivo,$dado){
        
        return json_encode($arquivo[$dado]);

    }

    function getTudo($arquivo){
        return json_encode($arquivo);
    }

