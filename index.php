<?php
    $url = "http://localhost/consumo_de_json/api/salgado_api.php?name=corndog&info=origem";
    $resposta = file_get_contents($url);
    $dado = json_decode($resposta,true);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salgados congelados</title>
    </head>
    <body>
        <pre>
        <?=var_dump($dado);?>
        </pre>
    </body>
</html>