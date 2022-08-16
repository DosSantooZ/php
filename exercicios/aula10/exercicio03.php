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
      $estado = isset($_GET["es"]) ? $_GET["es"]: 0;
      switch ($estado) {
        case 1:
          $lo = "Região Norte";
          break;
        case 2:
          $lo = "Região Nordeste";
          break;
        case 3:
          $lo = "Região Sudeste";
          break;
        case 4:
          $lo = "Região Centro-Oeste";
          break;
        case 5:
          $lo = "Região Sul";
          break;
        default:
          $lo = "Região indefinida";
      }  
      echo "Você mora na <span class='foco'>$lo</span>"; 
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>