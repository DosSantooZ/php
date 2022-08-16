<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"]: 1;
        $tot = 0;
        echo "<h3>Analisando o número $n ...</h3>";
        echo "Valores múltiplos: ";
        for ($i = 1; $i <= $n; $i++) { 
            if ($n % $i == 0) {
                echo "$i ";
                $tot++;   
            } 
        }
        if ($tot == 2) {
            $primo = "É PRIMO!";    
        } 
        else {
            $primo = "NÃO É PRIMO!";
        } 
        echo "<br>Total de múltiplos: $tot";
        echo "<br>Resultado: $n $primo";
    ?>
</div>
</body>
</html>