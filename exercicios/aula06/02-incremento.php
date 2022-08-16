<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $atual = $_GET["aa"];
                echo "O ano atual é $atual e o ano anterior e ". --$atual;
            ?>
        </div>
    </body>
</html>