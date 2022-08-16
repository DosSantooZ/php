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
        switch ($inc) {
            case 1:
                if ($ini < $fim) {
                    $c = $ini;
                    while ($c <= $fim) {
                        echo "$c ";
                        $c++;    
                    }
                }
                else {
                    $c = $ini;
                    while ($c >= $fim) {
                        echo "$c ";
                        $c--;
                    }
                }    
                break;
            case 2:
                if ($ini < $fim) {
                    $c = $ini;
                    while ($c <= $fim) {
                        echo "$c ";
                        $c += 2;    
                    }   
                }
                else {
                    $c = $ini;
                    while ($c >= $fim) {
                        echo "$c ";
                        $c -= 2;    
                    }
                }    
                break;
            case 3:
                if ($ini < $fim) {
                    $c = $ini;
                    while ($c <= $fim) {
                        echo "$c ";
                        $c += 3;    
                    }   
                }
                else {
                    $c = $ini;
                    while ($c >= $fim) {
                        echo "$c ";
                        $c -= 3;    
                    }
                }    
                break;
            case 4:
                if ($ini < $fim) {
                    $c = $ini;
                    while ($c <= $fim) {
                        echo "$c ";
                        $c += 4;    
                    }   
                }
                else {
                    $c = $ini;
                    while ($c >= $fim) {
                        echo "$c ";
                        $c -= 4;    
                    }
                }    
                break;
            case 5:
                if ($ini < $fim) {
                    $c = $ini;
                    while ($c <= $fim) {
                        echo "$c ";
                        $c += 5;    
                    }   
                }
                else {
                    $c = $ini;
                    while ($c >= $fim) {
                        echo "$c ";
                        $c -= 5;    
                    }
                }    
        }     
    ?>
</div>
</body>
</html>