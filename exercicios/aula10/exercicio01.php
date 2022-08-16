<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css">
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $n = isset($_GET["num"]) ? $_GET["num"]: 0;
      $cal = isset($_GET["cal"]) ? $_GET["cal"]: 1;
      switch ($cal) {
        case 1:
          $op = $n * 2;  
          break;

        case 2:
          $op = pow($n, 3);
          break;
        
        default:
          $op = sqrt($n);  
      }
      echo "O resultado da operação é: <span class='foco'>$op</span>";               
    ?>

    <br>

    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>