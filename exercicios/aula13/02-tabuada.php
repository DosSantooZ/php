<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"]: 1;
        for ($i = 1; $i <= 10; $i++) { 
            echo "<br>$n X $i = ". ($n * $i);    
        }    
    ?>
    <br>
    <a href="02-index.php">Voltar</a>
</div>
</body>
</html>