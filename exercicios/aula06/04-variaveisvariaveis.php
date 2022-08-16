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
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável x é $x";
                echo "<br/>A variável abc recebeu $abc";
            ?>
        </div>
    </body>
</html>