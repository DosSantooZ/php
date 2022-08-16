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
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"]: 0;
        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"]: 0;
        $media = ($nota1 + $nota2)/2;
        echo "A média entre ". number_format($nota1, 1). " e ". number_format($nota2, 1). " é igual a ". number_format($media, 1);
        if ($media >= 0 && $media < 5) {
            $aluno = "REPROVADO";     
        }
        elseif ($media >= 5 && $media < 7) {
            $aluno = "RECUPERAÇÃO";       
        }
        else {
            $aluno = "APROVADO";
        }
        echo "<br/>Situação do aluno: $aluno";
    ?>

    <br/>

    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>