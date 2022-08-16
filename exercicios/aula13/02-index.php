<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="02-tabuada.php" method="get">
        <select name="num">
            <?php
                for ($i = 1; $i <= 10; $i++) { 
                    echo "<option value'$i'>$i</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>