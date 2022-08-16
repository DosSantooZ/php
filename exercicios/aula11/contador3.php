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
        $ini = isset($_GET["ini"]) ? $_GET["ini"]: 1;
        $fim = isset($_GET["fim"]) ? $_GET["fim"]: 10;
        $inc = isset($_GET["inc"]) ? $_GET["inc"]: 1;
        if ($ini < $fim) {
            while ($ini <= $fim) {
                echo "$ini ";
                $ini += $inc;    
            }    
        }
        else {
            while ($ini >= $fim) {
                echo "$ini ";
                $ini -= $inc;   
            }
        }
    ?>
</div>
</body>
</html>