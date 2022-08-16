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
      echo "<h2>Mostrando a Tabuada de $n";
      $c = 1;
      do {
        echo "<br>$n X $c = ". ($n * $c);
        $c++;
      } while ($c <= 10);    
    ?>
    <br>
    <a href="03-tabuada.html">Voltar</a>
</div>
</body>
</html>